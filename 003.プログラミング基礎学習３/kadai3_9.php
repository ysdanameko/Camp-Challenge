<?php
$user1 = array(
  'id'=>'1582',
  'name'=>'nobunaga',
  'birth'=>'1534/5/12',
  'add'=>'Aichi');
$user2 = array(
  'id'=>'1582',
  'name'=>'nobunaga',
  'birth'=>'1534/5/12',
  'add'=>'Aichi');
$user3 = array(
  'id'=>'1582',
  'name'=>'nobunaga',
  'birth'=>'1534/5/12',
  'add'=>'Aichi');

$all = array(
  'profile1'=>$user1,
  'profile2'=>$user2,
  'profile3'=>$user3
);


foreach ($all as $key => $value) {//$allを分解したよ
  foreach ($value as $key => $value){//$valueは$user1,$user2,$user3のことで、それを分解したよ
  if ($key == 'id' || $key == 'add'){
    continue;
  }
  echo $value;
  }
}



/*
3人分のプロフィールについてIDと住所以外を表示する処理を実行する。
2重のforeachとcontinueを必ず用いること
