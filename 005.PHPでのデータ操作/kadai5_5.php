<?php

session_start();

?>
<!DOCTIPE html>
<html lang='ja'>
<head>
  <meta chrset='UTF-8'>
  <title>PHPとHTMLの入力フォーム</title>
</head>
<body>
  <div style - 'font-size : 30px; mrgin-bottom:20px; margin-left:20px'>
    名前・性別・趣味を入力するページを作成してください。<br/>
    また、入力された名前・性別・趣味を記憶し、<br/>
    次にアクセスした際に記録されたデータを初期値として表示してください。<br/>
    ※PHPと同時に、HTMLの知識が必要になります。<br/>
    ※入力フィールドの使い方を調べてみましょう。<br/><br/>

  </div>
</div>
<form action='./kadai5_2.php' method='post'>
  お名前は？<br/>
  <input type='text' name='userName' size='60' value="<?php
  // if (isset ($_SESSION['userName'])) {
  //   echo $_SESSION['userName'];
  // }
  // else{}//未定義　何も処理しない

isset($_SESSION['userName']) && print $_SESSION['userName']

//SESSIONの中がからだったらnull 入っていたらechoしてね
   ?>">
  <br/>
  性別は？
  <br/>
  <input type='radio' name='gender' value='man' checked='<?php echo $_SESSION['gender'] ?>'>　男
　<input type='radio' name='gender' value='woman' checked='<?php echo $_SESSION['gender'] ?>'>女

<br/>
ご趣味は？<br/>
<input type='checkbox' name='hobby' value='ランニング' checked='<?php echo $_SESSION['hobby'] ?>'>ランニング<br/>
<input type='checkbox' name='hobby' value='BIGBANGの追っかけ' checked='<?php echo $_SESSION['hobby'] ?>'>BIGBANGの追っかけ<br/>
<input type='checkbox' name='hobby' value='ファッション' checked='<?php echo $_SESSION['hobby'] ?>'>ファッション<br/>
<input type='checkbox' name='hobby' value='語学学習' checked='<?php echo $_SESSION['hobby'] ?>'>語学学習<br/>

<input type='submit'>
</form>
</body>
</html>
