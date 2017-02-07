<?php
/*
【フォームからデータを挿入】
フォームからデータを挿入できる処理を構築してください。
*/
$dsn = 'mysql:host=localhost;dbname=Challenge_db;charset=utf8';
$user = 'yoshida1';
$pass = 'nameko';

try{
  $pdo = new PDO($dsn, $user, $pass);

if(!empty($_POST['name']) && !empty($_POST['tell']) && !empty($_POST['birthday'])){
  $sql = "INSERT INTO profiles(profilesID, name, tell, age, birthday) VALUES(:profilesID, :name, :tell, :age, :birthday)";
  $query = $pdo -> prepare($sql);
  $add_ID = $_POST['profilesID'];
  $add_name = $_POST['name'];
  $add_tell = $_POST['tell'];
  $add_age = $_POST['age'];
  $add_birthday = $_POST['birthday'];
  $query -> bindValue(':profilesID', $add_ID);
  $query -> bindValue(':name', $add_name);
  $query -> bindValue(':tell', $add_tell);
  $query -> bindValue(':age', $add_age);
  $query -> bindValue(':birthday', $add_birthday);
  $query -> execute();
}else{
  echo 'すべての値に入力してください。';
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
	<form action="kadai7_9.php" method="post">
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
		名前：<input type="text" name="name"><br>
		電話番号：<input type="text" name="tell"><br>
		年齢：<input type="text" name="age"><br>
		誕生日：<input type="text" name="birthday"><br>
		<input type="submit" name="btnSubmit" value="入力する">
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
