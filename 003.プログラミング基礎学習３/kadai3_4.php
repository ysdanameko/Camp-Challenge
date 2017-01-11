<?php
function my_profile(){
  echo '私の名前は吉田です<br>';
  echo '1988年5月24日うまれ<br>';
  echo '無印良品が好き<br>';
  return false;
}

if(my_profile() == true){
  echo 'この処理は正しく実行できました<br>';
}
else{
  echo '正しく実行できませんでした<br>';
}

//課題「ユーザー定義関数」で定義した関数に追記する形として、戻り値　true(bool値)　を返却するように修正し、関数の呼び出し側でtrueを受け取れたら「この処理は正しく実行できました」、そうでないなら「正しく実行できませんでした」と表示する


function my_profile2(){
  $name = '私の名前は吉田です';
  $birth = '1988年5月24日うまれ';
  return $name;
}

$b = my_profile2();
echo $b;
