<?php
/*
【検索用フォームの用意と検索（部分一致）】
検索用のフォームを用意し、
名前の部分一致で検索＆表示する処理を構築してください。
同じページにリダイレクトするPOST処理と、
POSTに値が入っているかの条件分岐を活用すれば、
一つの.phpで完了できますので、チャレンジしてみてください。
*/
if (!empty($_POST['word'])){

  $dsn = 'mysql:host=localhost;dbname=Challenge_db;charset=utf8';
  $user = 'yoshida1';
  $pass = 'nameko';

  try{
    $pdo = new PDO($dsn, $user, $pass);

    //検索処理
    $sql = "SELECT * FROM profiles WHERE name LIKE (:name)";
    $query = $pdo -> prepare($sql);

    if($query){
      $find_name = $_POST['松岡'];
      $like_name = "%". $find_name . "%";

      $query -> bindValue(':name', $like_name);
      $query -> execute();
      $result = $query -> fetchall(PDO::FETCH_ASSOC);

    }else{
      echo '検索に失敗しました';
    }
  }catch(PDOException $Exception){
    die('接続に失敗しました:'.$Exception->getMessage());
  }

  $pdo = null;

}else{
  echo '検索ワードを入力してください';
}
