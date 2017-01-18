<?php

/*
【タイムスタンプの生成】
2016年1月1日 0時0分0秒の
タイムスタンプを作成し、表示してください。
*/

$stamp = mktime(0,0,0,1,1,2016);

$date = date('Y/m/d',$stamp);

echo $date;
