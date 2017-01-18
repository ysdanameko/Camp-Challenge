<?php

/*
【ファイルの書き出しと保存】
ファイルに自己紹介を書き出し、保存してください。
*/

$moji =  '吉田早也香です。';
$filename = 'text.txt';
$byteNum = file_put_contents ( $filename , $moji );


// file_put_contents
