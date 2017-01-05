<?php
$num = $_GET['num'];//入力する値
$message = '';
switch($num){
case 1:
$message = 'one';
break;
case 2:
$message = 'tow';
break;
default:
$message = '想定外';
break;
}
echo $message;
