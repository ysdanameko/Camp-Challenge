<?php
/*
【複合検索】
検索用のフォームを用意し、
名前、年齢、誕生日を使った複合検索ができるようにしてください。
*/
//POSTの中身があればそのまま使う。なければnullだよ。
//POSTごとに変数用意して
if(isset($_POST['name'])){
  $name = $_POST['name']
}else{
  $name = null
}
if(isset($_POST['age'])){
  $age = $_POST['age']
}else{
  $age = null
}
if(isset($_POST['birthday'])){
  $birthday = $_POST['birthday']
}else{
  $birthday = null
}


if($name != null || $age != null || $birthday != null){


$dsn = 'mysql:host=localhost;dbname=Challenge_db;charset=utf8';
$user = 'yoshida1';
$pass = 'nameko';

try{
  $pdo = new PDO($dsn, $user, $pass);

//検索
  $sql = "SELECT * from profiles WHERE name LIKE (:name) and age LIKE (:age) and birthday LIKE (:birthday)";
  $query = $pdo -> prepare($sql);

  $find_name = $_POST['name'];
  $like_name = "%". $find_name . "%";
  $query -> bindValue(':name', $like_name);

  $find_age = $_POST['age'];
  $like_age = "%". $find_age . "%";
  $query -> bindValue(':age', $like_age);

  $find_birth = $_POST['birthday'];
  $like_birth = "%". $find_birth . "%";
  $query -> bindValue(':birthday', $like_birth);

//表示
// $sql = "SELECT * FROM profiles"; //作った
// $query = $pdo -> prepare($sql); //PDOに知らせる

$query -> execute();//PDOがサーバーに送った、結果きた
$result = $query -> fetchall(PDO::FETCH_ASSOC);//はい結果

}catch(PDOException $Exception){
  die('接続に失敗しました:'.$Exception -> getMessage());
}


$pdo = null;

}else{
  echo '検索ワードを入力してね。';

}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>kadai7_12</title>
</head>
<body>
	<form action="kadai7_12.php" method="post">
    名前：<input type="text" name="name"><br>
		年齢：<input type="text" name="age"><br>
		誕生日：<input type="text" name="birthday"><br>
		<input type="submit" name="btnSubmit" value="検索する！">
	</form>
	<p>↓検索結果</p>
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
