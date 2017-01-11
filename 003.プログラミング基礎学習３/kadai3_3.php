<?php
//$num = $_GET['num'];
//echo $num.'は';

//$num=2

function decision($num1,$num2=5,$type=false){
$kotae = $num1 * $num2;
if($type==false){
  echo $kotae;
}elseif ($type==true){
  $nijo = $kotae * $kotae;
  echo $nijo;
}
}
decision(2,4,false);
//引き数が3つの関数を定義する。1つ目は適当な数値を、2つ目はデフォルト値が5の数値を、最後はデフォルト値がfalse(bool値)の$typeを引き数として定義する。1つ目の引き数に2つ目の引き数を掛ける計算をする関数を作成し、$typeがfalseの時はその値を表示、trueのときはさらに2乗して表示する。
