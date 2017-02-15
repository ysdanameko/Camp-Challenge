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

//データベース接続

function create_pdo() {
    $dsn = DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_DBNAME . ';charset=utf8';
    $obj_pdo = new PDO($dsn, DB_USER, DB_PWD);
    $obj_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $obj_pdo;
}

//結果
function pdo_select($obj_pdo, $sql, $params=array()) {
  $stmt =  $obj_pdo->prepare($sql);
}

  foreach($params as $key=>$val) {
    $stmt->bindValue($key, $val);
  }

  $stmt->execute();

  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

//情報を追加
function pdo_insert($obj_pdo, $sql, $params=array()) {
    $stmt = $obj_pdo->prepare($sql);

    foreach($params as $key=>$val) {
        $stmt->bindValue($key, $val);
    }

    $stmt->execute();

    return $stmt->rowCount();
}
