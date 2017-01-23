<?php

/*
【組み込み関数まとめ】
紹介していないPHPの組み込み関数を利用して、処理を作成してください。

講義では紹介されていないPHPの組み込み関数はたくさん存在します。
PHPの公式サイトから関数を選び、実際にロジックを作成してみてください。

また、この処理を作成するに当たり、下記を必ず実装してください。
①処理の経過を書き込むログファイルを作成する。
②処理の開始、終了のタイミングで、ログファイルに開始・終了の書き込みを行う。
③書き込む内容は、「日時　状況（開始・終了）」の形式で書き込む。
④最後に、ログファイルを読み込み、その内容を表示してください。
*/




//start_log
$start_time = microtime(true);
$log_msg = '開始時間: '.formatMicrotime($start_time,'Y-m-d H:i:s','<br>');
echo $log_msg;
error_log($log_msg, 3, 'log.txt');

echo '<br>';

//process1
//末尾のデータを削除する 【array_pop】
$stack = array('pen1', 'apple', 'pen2', 'pineapple');
$piko = array_pop($stack);
print_r($stack); //分かりやすい形式で変数の値に関する情報を表示
print $piko;

//process2
//文字列を置換する 【str_replace】
$html = '<font size = 3><br>Pen-Pineapple-Apple-Pen</font><br>';
$search = 'size = 3';
$replace = 'size = 5';
$result = str_replace($search, $replace, $html);
echo $result;

//end_log
$end_time = microtime(true);
$log_msg = '終了時間'.formatMicrotime($end_time,'Y-m-d H:i:s','<br>');
echo $log_msg;
error_log($log_msg, 3, 'log.txt');

echo '<br><br>';

//log_dispkay
$file_txt = file_get_contents('log.txt');
echo $file_txt;

//time_format_convert_method
function formatMicrotime($time, $format = null)
{
if (is_string($format)){
$sec = (int)$time;
$msec = (int)(($time - $sec) * 100000);
$formated = date($format, $sec). '.'. $msec;
}
else {
  $formated = sprintf('%0.5f',$time);
}
  return $formated;
}
