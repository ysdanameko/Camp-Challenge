<?php

/*
【文字の入れ替え】
以下の文章の「I」⇒「い」に、
「U」⇒「う」に入れ替える処理を作成し、
結果を表示してください。
「きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます」。
*/

$moji = 'きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます';
echo '「'. $moji . '」'.'<br>'.'に対して置き換えを実行↓<br>';

$moji = str_replace('I','い',$moji);
$moji = str_replace('U','う',$moji);

echo $moji;
