<?php
//$num = $_GET['num'];
//echo $num.'は';

//$num=2

function decision($num){
  if($num%2==0){
    echo '偶数';
  }elseif($num%2==1){
    echo '奇数';
  }
}
decision(111);
//引数として数値を受け取り、その値が奇数か偶数か判別＆表示する処理を関数として制作し、適当な数値に対して奇数・偶数の判別を行ってください
