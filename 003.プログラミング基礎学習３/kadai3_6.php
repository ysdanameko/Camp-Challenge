<?php
function search($name){

$user1 = array($id1='1582',
      $name1='nobunaga',
      $birth1='1534/5/12',
      $add1='Aichi');
$user2 = array($id2='1598',
      $name2='hideyoshi',
      $birth2='1537/3/17',
      $add2='Aichi');
$user3 = array($id3='1616',
      $name3='ieyasu',
      $birth3='1543/1/31',
      $add3='Aichi');

extract($user1);
extract($user2);
extract($user3);

global $key;

if(strstr($name1,$key)){
  //nameに検索ワードが含まれるなら
 return array($id1,$name1,$birth1,$add1);
}elseif(strstr($name2,$key)){
 //name2に検索ワードが含まれるなら
 return array($id2,$name2,$birth2,$add2);
}elseif(strstr($name3,$key)){
 //name3に検索ワードが含まれるなら
 return array($id3,$name3,$birth3,$add3);
}
}
$key = 'i';//ここに検索ワード
$search = search($key);//検索ワードが仮引数に代入される
    foreach ($search as $value) {
      echo "$value<br>";
}


//前による検索プログラムを実装する。3人分のプロフィール(項目は課題「戻り値2」参照)をあらかじめ定義しておく。引き数にそれらのプロフィールと文字列をとり、戻り値は1人分のプロフィール情報を返却する。引き数の文字が名前に含まれる(部分一致)プロフィール情報(複数名合致する場合は最初のプロフィールとする)を戻り値として返却する。それ以降などは課題「戻り値2」と同じ扱いに
