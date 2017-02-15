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

$errflg = false;
$isSubmit = false;

if (isset($_POST[SUBJECT_PAGE_SUBMIT])) {
    $isSubmit = true;

    if(!empty($_POST['name'])) {

      $name = $_POST['name'];

      $sql = 'INSERT INTO ' . DB_MST_SUBJECT . '(name) ';
      $sql .= 'Values (:name)';

      $reg_param = array();
      $reg_param[':name'] = $name;

        try {
            //DB接続
            $pdo = create_pdo();
            //追加
            $users = pdo_insert($pdo, $sql, $reg_param);
            $pdo = null;
        } catch (Exception $err) {
            $pdo = null;
            echo $err->getMessage();
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
        <title>PDO課題0 - SUBJECT</title>
        <meta charset="UTF-8">
        <style>
            body {
                font-family: Meiryo, Osaka, sans-serif;
                fontsize:16px;
            }
            ul li {
                display: inline;
            }
        </style>
    </head>
    <body>
        <h1>なめこ塾　試験科目登録</h1>
        <a href="main.php">トップへ戻る</a>
        <?php
            if ($isSubmit == true && $errflg == false ) {
        ?>
        <p><?=MSG_REGIST_OK?></p>
        <?php

            } else {
                if ($errflg == true) {
                    echo '<p>'.MSG_INPUT_ERR.'</p>';
                }
        ?>
        <hr>
        <form action="subject.php" method="post">
          曜日 <select name="day">
            <option value="1">月</option>
            <option value="1">火</option>
            <option value="1">水</option>
            <option value="1">木</option>
            <option value="1">金</option>
          </select>
          <br>
          時限 <select name = "time">
            <option value="1">1時限目</option>
            <option value="1">2時限目</option>
            <option value="1">3時限目</option>
            <option value="1">4時限目</option>
            <option value="1">5時限目</option>
            <option value="1">6時限目</option>
          </select>
          <br>
          科目 <input type="text" name="subjects" value="<?php if ($isSubmit == true && !empty($_POST['subjects'])) { echo $_POST['subjects']; } ?>">
          <br>
          担当 <input type="text" name="teacher" value="<?php if ($isSubmit == true && !empty($_POST['teacher'])) { echo $_POST['teacher']; }" ?>">
          <input type="submit" name="<?=SUBJECT_PAGE_SUBMIT?>" value="登録">
        </form>
    </body>
</html>
