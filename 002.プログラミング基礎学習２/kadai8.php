<?php
$i = $_GET['i'];//入力する値
switch($i){
case 'A':
$message = '英語';
break;
case 'あ':
$message = '日本語';
break;
}
echo $message;
//値が"A"なら「英語」、値が"あ"なら「日本語」、それ以外は何も表示しない処理
