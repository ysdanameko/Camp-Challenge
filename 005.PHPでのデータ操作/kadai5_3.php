<?php
/*課題「クッキーの記録と表示」と同じ機能を
セッションで作成してください。*/
date_default_timezone_set('Asia/Tokyo');

session_start();

$access_time = date('Y年m月d日 H:i:s');
$_SESSION['time'] = $access_time;

echo $_SESSION['time'];
