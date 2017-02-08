<?php
/*
【特定のレコードを削除するフォーム作成】
profileIDで指定したレコードを削除できるフォームを作成してください。
*/
$dsn = 'mysql:host=localhost;dbname=Challenge_db;charset=utf8';
$user = 'yoshida1';
$pass = 'nameko';

try{
  $pdo = new PDO($dsn, $user, $pass);

if(!empty($_POST['profilesID'])){
  $sql = "DELETE FROM profiles WHERE profilesID = (:profilesID)";
  $query = $pdo -> prepare($sql);
  $add_ID = $_POST['profilesID'];
  $query -> bindValue(':profilesID', $add_ID);
  $query -> execute();
}else{

  echo '削除するIDを選択してください。';
}

//表示
$sql = "SELECT * FROM profiles"; //全部出したよ
$query = $pdo -> prepare($sql); //あってるか確認するわー、あってたわー
$query -> execute();//じゃあいってくるねー（実行）送るねー
$result = $query -> fetchall(PDO::FETCH_ASSOC);//はい結果

}catch(PDOException $Exception){
  die('接続に失敗しました:'.$Exception -> getMessage());
}

$pdo = null;

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>kadai7_9</title>
</head>
<body>
	<form action="kadai7_10.php" method="post">
		ID：<select name="profilesID">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
			</select><br>
		<input type="submit" name="btnSubmit" value="削除する">
	</form>
	<p>↓表示</p>
	<p>
	<?php
		//表示
		if(isset($result)){
			foreach ($result as $stmt => $row) {
				echo $row['profilesID']. '：'. $row['name']. '：'. $row['tell']. '：'. $row['age']. '：'. $row['birthday'] .'<br>';
			}
		}
	?>
	</p>
</body>
</html>
