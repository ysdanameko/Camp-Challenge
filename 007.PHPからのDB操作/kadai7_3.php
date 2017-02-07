<?php
/*
【全情報の取得と表示】
前回の課題「テーブルの作成とinsert」で作成したテーブルから
SELECT*により全件取得し、
画面に取得した全情報を表示してください
*/
try{
$pdo= new PDO("mysql:host=localhost;dbname=Challenge_db;charset=utf8","yoshida1","nameko");
//テーブルからレコードをすべて表示
$sql = "SELECT * FROM profiles";
//実行
$query = $pdo->prepare($sql);
//SQLを実行（エンターのようなもの）
$query -> execute();
//連想配列形式で$resultに結果を格納
$result = $query -> fetchall(PDO::FETCH_ASSOC);

//結果を縦に並べる
foreach($result as $value){
  echo '<br>';
  foreach($value as $value2){
    echo $value2.'<br>';
  }
}

// var_dump($result);
//
// echo '<br><br>';

}catch(PDOException $Exception){
  die('接続に失敗しました:'.$Exception->getMessage());
}
echo '接続に成功しました！';
//接続を切断
$pdo = null;
