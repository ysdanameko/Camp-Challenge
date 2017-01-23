<!DOCTIPE html>
<html lang='ja'>
<head>
  <meta chrset='UTF-8'>
  <title>データ処理:kadai_1</title>
</head>
<body>
  <div style - 'font-size : 30px; mrgin-bottom:20px; margin-left:20px'>
    以下の入力フィールドを持ったHTMLを、<br/>
    PHPで処理する想定で記述してください。<br/>
    名前（テキストボックス）、性別（ラジオボタン）、趣味（複数行テキストボックス）
  </div>
</div>
<form method='post' action='kadai5_2.php'>
  お名前は？<br/>
  <input type='text' name='toukou' size='60'>
  <br/>
  性別は？
  <br/>
  <input type='radio' name='gender' value='man'>　男
　<input type='radio' name='gender' value='woman'>女

<br/>
ご趣味は？<br/>
<input type='checkbox' name='hobby' value='ランニング'>ランニング<br/>
<input type='checkbox' name='hobby' value='BIGBANGの追っかけ'>BIGBANGの追っかけ<br/>
<input type='checkbox' name='hobby' value='ファッション'>ファッション<br/>
<input type='checkbox' name='hobby' value='語学学習'>語学学習<br/>

<input type='submit'>
</form>
</body>
