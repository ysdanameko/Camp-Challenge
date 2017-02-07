<?php
/*
【特定のレコードの削除】
課題「テーブルへ情報を格納」でINSERTした
レコードを指定して削除してください。
SELECT*で結果を表示してください。
*/

try{
$pdo= new PDO("mysql:host=localhost;dbname=Challenge_db;charset=utf8","yoshida1","nameko");
//削除
$sql1 = "DELETE FROM member WHERE name='なめこ'";
$query = $pdo->prepare($sql);
$query -> execute();
//検索処理
$sql2 = "SELECT * FROM profiles";
$query = $pdo->prepare($sql);
$query -> execute();

//連想配列形式で$resultに結果を格納
$result = $query -> fetchall(PDO::FETCH_ASSOC);
//結果
foreach($result as $value){
  foreach($value as $value2){
    echo $value2.'<br>';
  }
}


}catch(PDOException $Exception){
  die('接続に失敗しました:'.$Exception->getMessage());
}
echo '接続に成功しました！';
//接続を切断
$pdo = null;
