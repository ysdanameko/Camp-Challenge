<?php
/*クッキーに現在時刻を記録し、次にアクセスした際に、
前回記録した日時を表示してください。*/
$lastDate = $_COOKIE['LastLoginDate'];

date_default_timezone_set('Asia/Tokyo');

$access_time = date('Y年m月d日 H:i:s');
setcookie('LastLoginDate',$access_time);

echo $lastDate; //前回記録した日時を表示
