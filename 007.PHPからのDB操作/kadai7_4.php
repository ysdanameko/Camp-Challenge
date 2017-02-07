<?php
/*
【特定のレコードの情報取得と表示】
前回の課題「テーブルの作成とinsert」で作成したテーブルから
profileID=1の情報を取得し、画面に取得した情報を表示してください
*/

try{
$pdo= new PDO("mysql:host=localhost;dbname=Challenge_db;charset=utf8","yoshida1","nameko");
//テーブルからprofilesID1のレコードのみを検索して表示
$sql = "SELECT * FROM profiles WHERE profilesID = 1";
//実行
$query = $pdo->prepare($sql);
//SQLを実行（エンターのようなもの）
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
