<?php

/*
【ファイルの読み出しと表示】
ファイルから自己紹介を読み出し、表示してください。
*/
$moji =  '吉田早也香です。';
$filename = 'text.txt';
echo file_get_contents ($filename);

//file_get_contents ($file_txt);
