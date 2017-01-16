<?php
$i=3;
function memory(){

  global $i;
  static $a = 1;
  echo $a ++.'回目'. '→';
  echo $i = $i*2;
 }

for($a=1; $a<=20; $a++) //$a=回数 20になるまで1づつ足していく
{
echo memory().'<br>';
}
//引き数、戻り値はなしの関数を用意。初期値3のglobal値を2倍していく、ローカルな値はstaticとしてその関数が何回実行されたのかを保持していくような関数である。この関数を20回呼び出す
