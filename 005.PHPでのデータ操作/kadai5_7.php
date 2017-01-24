<html lang='ja'>
<head>
  <meta chrset='UTF-8'>
  <title>PHPとHTMLの入力フォーム</title>
</head>
<body>
  <div style - 'font-size : 30px; mrgin-bottom:20px; margin-left:20px'>
【HTMLのタグについて】HTMLについて調べましょう。<br/>
HTMLには入力フィールド意外にも様々なタグが存在します。<br/>
Webページをデザインする上で欠かせない知識なので、<br/>
タグを調べ、色々と使ってみましょう。
  </div>
  <!-- 横線 幅500px -->
  <section><br><Hr Align="left" Width="500">
    <!-- nav要素 -->
  	<h3>セッションの見出し</h3>
    <p>AIDMA(アイドマ)の法則　広告宣伝に対する消費者の心理プロセス</p>

  <nav>
    <ul>
      <li><a href="#"><font color="#ff0000">A</font>ttention</a>・・・注意</li>
      <li><a href="#"><font color="#ff0000">I</font>nterest</a>・・・関心</li>
      <li><a href="#"><font color="#ff0000">D</font>esire</a>・・・欲求</li>
      <li><a href="#"><font color="#ff0000">M</font>emory</a>・・・記憶</li>
      <li><a href="#"><font color="#ff0000">A</font>ction</a>・・・行動</li>
    </ul>
  </nav>
  <section><br><Hr Align="left" Width="500">
    <!-- 画像表示 -->
  <h3>HTML内に画像を挿入する記述</h3>
  <p><img src="https://www.pakutaso.com/shared/img/thumb/CCC9V9A0103_TP_V.jpg" width="400" height="250" alt="眼鏡"></p>
  </section>
  <section><br><Hr Align="left" Width="500">
    <!-- お問い合わせフォーム -->
  <h3>お問い合わせフォーム</h3>
</section>
<form action="#" method="post">
<p>名前：<input type="text" name="name" size="20" maxlength="10" value="お名前"></p>
<p>内容：<textarea name="subject" rows="5" cols="40">お問い合せ内容</textarea></p>
<p><input type="submit" value="送信"></p>
</form>
</body>
</html>
