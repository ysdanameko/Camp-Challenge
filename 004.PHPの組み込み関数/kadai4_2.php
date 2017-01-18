<?php

/*
現在の日時を「年-月-日 時:分:秒」で表示してください。
*/
date_default_timezone_set('Asia/Tokyo');
$t = date('Y年m月d日 H時i分s秒');

echo $t;
