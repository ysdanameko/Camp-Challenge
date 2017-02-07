<?php
/*
【エラーハンドリングを含んだ接続の確立】
Challenge_dbへのエラーハンドリングを含んだ接続の確立を行ってください
*/

try{
  $pdo=new PDO("mysql:host=localhost;dbname=Challenge_db;charset=utf8","yoshida1","nameko");
// //テーブル作成
// $sql = "create table if not exists member(ID int, name varchar(255))";
// $res = $pdo -> prepare($sql);
// $res -> execute();

}catch(PDOException $Exception){
  die('接続に失敗しました:'.$Exception->getMessage());
}


echo '接続に成功しました！';
