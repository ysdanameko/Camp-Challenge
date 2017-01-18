<?php

/*
  課題9の処理のうち2人目まででforeachのループを抜けるようにする
*/


$user1 = array(
  'id'=>'1582',
  'name'=>'nobunaga',
  'birth'=>'1534/5/12',
  'add'=>'Aichi');
$user2 = array(
  'id'=>'1582',
  'name'=>'nobunaga2',
  'birth'=>'1534/5/12',
  'add'=>'Aichi');
$user3 = array(
  'id'=>'1582',
  'name'=>'nobunaga3',
  'birth'=>'1534/5/12',
  'add'=>'Aichi');

$all = array(
  'profile1'=>$user1,
  'profile2'=>$user2,
  'profile3'=>$user3
);

$i =0;
foreach($all as $key => $value){ //$allを分解
  if($value == $user3){
  break;
}
foreach ($value as $key => $value){ //$allを分解

  if ($key == 'id' || $key == 'add'){
    continue;
  }
  echo $value;
  }
}
