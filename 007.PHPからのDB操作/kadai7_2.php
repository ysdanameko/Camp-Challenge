<?php
/*
【検索と表示】
前回の課題「テーブルの作成とinsert」で作成したテーブルに
自由なメンバー情報を格納する処理を構築してください
*/
try{
//1.まずはデータベースに接続してくれる仲介役、PDOオブジェクトさんを生成するよ
$pdo= new PDO("mysql:host=localhost;dbname=Challenge_db;charset=utf8","yoshida1","nameko");

//2.SQL文を定義するよ
$sql = "INSERT INTO profiles(profilesID,name,tell,age,birthday) VALUES(:profilesID, :name, :tell, :age, :birthday)";

//3.それを実行！そしてその結果を受け取れるように変数を用意
$query = $pdo->prepare($sql);

$query -> bindValue(':profilesID',9);
$query -> bindValue(':name','なめこ');
$query -> bindValue(':tell','000-0000-0000');
$query -> bindValue(':age',4);
$query -> bindValue(':birthday','2012-5-24');

//SQLを実行（エンターのようなもの）
$query -> execute();

}catch(PDOException $Exception){
  die('接続に失敗しました:'.$Exception->getMessage());
}
echo '接続に成功しました！';
//接続を切断
$pdo = null;
