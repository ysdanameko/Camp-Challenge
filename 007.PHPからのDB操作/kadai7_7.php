<?php
/*
【特定のレコードの更新】
profileID=1のnameを「松岡 修造」に、
ageを48に、birthdayを1967-11-06に更新してください。
*/
try{
$pdo= new PDO("mysql:host=localhost;dbname=Challenge_db;charset=utf8","yoshida1","nameko");
//削除
$sql1 = "UPDATE profiles set name ='松岡 修造',age=48,birthday='1967-11-06' WHERE memberID=1";
$query = $pdo->prepare($sql1);
$query -> execute();
//検索処理
$sql2 = "SELECT * FROM profiles";
$query = $pdo->prepare($sql2);
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
