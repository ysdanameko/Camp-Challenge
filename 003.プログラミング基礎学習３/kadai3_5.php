<?php
function profile(){
  $id='1582';
  $name='nobunaga';
  $birth='1534/5/12';
  $add='Aichi';
  return $id.'<br>'.$name.'<br>'.$birth.'<br>'.$add;
}
$profile = profile();
echo $profile;

//戻り値としてある人物のid(数値),名前,生年月日、住所を返却し、受け取った後は全情報を表示する
