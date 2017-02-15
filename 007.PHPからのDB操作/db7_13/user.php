<?php
/*
【DB操作応用課・ロジック構築】
以下の仕様のプログラムを作成しなさい
・○×塾の一週間時間割
・時間割はhtmlのテーブル構造をうまく用いること
・科目名と、担当者が各テーブルに入る
・科目名、担当者名は自由に考えてよい。
・入力フォームを持つページを用意し、何日目の、
何時限目に、どの科目で、どの担当者が担当するのか、をそれぞれ入力できる。
*/

require_once 'define.php';
require_once 'util.php';

$subjects = array();
try {
    $pdo = create_pdo();

    $sql_select_subjects = 'SELECT * FROM ' . DB_MST_SUBJECT;
    $subjects = pdo_select($pdo, $sql_select_subjects);

    $pdo = null;

} catch (Exception $err) {
    $pdo = null;
    echo $err->getMessage();
    exit;
}

$errflg = false;
$isSubmit = false;

if (isset($_POST[USER_PAGE_SUBMIT])) {
    $isSubmit = true;

    if (!empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['subjects'])) {

        $name = $_POST['name'];
        $address = $_POST['address'];
        $select = $_POST['subjects'];

        $sql = 'INSERT INTO ' . DB_TBL_USER . '(name, address, subjects, cost) ';
        $sql .= 'Values (:name, :address, :subjects, :cost)';

        $reg_param = array();
        $reg_param[':name'] = $name;
        $reg_param[':address'] = $address;
        $reg_param['subjects'] = implode(',', $select);
        $reg_param[':cost'] = EXSAMINATION_FEE * count($select);

        try {
            $pdo = create_pdo();
            $users = pdo_insert($pdo, $sql, $reg_param);
            $pdo = null;
        } catch (Exception $ex) {
            $pdo = null;
            echo $ex->getMessage();
            exit;
        }
    } else {
        $errflg = true;
    }
}

?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>PDO課題0 - USER</title>
        <meta charset="UTF-8">
        <style>
            body {
                font-family:"メイリオ", Meiryo, Osaka, sans-serif;
                fontsize:16px;
            }
            ul li {
                display: inline;
            }
        </style>
    </head>
    <body>
        <h2>○×塾　受験者登録</h2>
        <?php
            if ($isSubmit == true && $errflg == false ) {
        ?>
        <p><?=MSG_REGIST_OK?></p>
        <a href="main.php">トップへ戻る</a>
        <?php
            } else {
                if ($errflg == true) {
                    echo '<p>'.MSG_INPUT_ERR.'</p>';
                } else {
                    echo '<p>全て必須項目です。</p>';
                }
        ?>
        <form action="user.php" method="post">
            <table>
                <tr>
                    <td>
                        名前：
                    </td>
                    <td>
                        <input type="text" name="name" value="<?php if ($isSubmit == true && !empty($_POST['name'])) { echo $_POST['name']; } ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        住所：
                    </td>
                    <td>
                        <input type="text" name="address" value="<?php if ($isSubmit == true && !empty($_POST['address'])) { echo $_POST['address']; } ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        受験科目：
                    </td>
                    <td>
                        <?php
                            if (!empty($subjects)) {
                                $select = array();
                                if (isset($_POST['subjects'])) {
                                    $select = $_POST['subjects'];
                                }
                                $check = '';
                                foreach($subjects as $val) {
                                    if (in_array($val['id'], $select)) { $check = 'checked'; } else { $check = ''; }

                                    echo '<input type="checkbox" name="subjects[]" value="'.$val['id'].'"'.$check.'>'.$val['name'].'<br>';
                                }
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="<?=USER_PAGE_SUBMIT?>" value="登録">
                    </td>
                </tr>
            </table>
        </form>
        <?php
            }
        ?>
    </body>
</html>
