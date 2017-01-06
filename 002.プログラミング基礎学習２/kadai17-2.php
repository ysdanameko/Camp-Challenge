<!-- クエリストリングを利用して、以下の処理を実現してください
簡易素因数分解のロジックを作成します。
クエリストリングから渡された数値を1ケタの素数で可能な限り分解し、
元の値と素因数分解の結果を表示するようにしてください。
2ケタ以上の素数が含まれた数値の場合は、
「元の値　1ケタの素因数　その他」と表記して、その他　に含んでください。 -->
<?php
$num=$_GET['num'];//数値を入れてね
echo '元の値は'.$num.'だよ。'.'<br>';//値を表示
if($num<=1) {//$numより1が小さいか等しい。数値を限定
  echo '正の整数を指定してね。';
}else {
  $firstflg = true;
  while($num>=2) {//$numが2以上
    $i=2; //$iは2だよ、2で割るよ
    if(($num%$i) ==0){
      //元の値 /素数の余りが0
//      echo ($num /= $i).'<br>';//2で割るよ
      $num /= $i;
      if($firstflg==true){
        echo "2";
        $firstflg=false;
      } else {
        echo "x2";
      }
      if($num<=1)//$numより1が小さいか等しい場合、ループを抜ける
      {
        break;
      }
    } else {
      break;
    }
  }
while($num>=3) {//$numが3以上
  $i=3; //$iは3だよ、3で割るよ
  if(($num%$i) ==0){
    //元の値 /素数の余りが0
//    echo ($num /= $i).'<br>';//3で割るよ
     $num /= $i;if($firstflg==true){
       echo "3";
       $firstflg=false;
     } else {
       echo "x3";
     }
    if($num<=1)//$numより1が小さいか等しい場合、ループを抜ける
    {
      break;
    }
  } else {
    break;
  }
}
while($num>=5) {//$numが5以上
  $i=5; //$iは5だよ、5で割るよ
  if(($num%$i) ==0){
    //元の値 /素数の余りが0
//    echo ($num /= $i).'<br>';//5で割るよ
     $num /= $i;
     if($firstflg==true){
       echo "5";
       $firstflg=false;
     } else {
       echo "x5";
     }
    if($num<=1)//$numより5が小さいか等しい場合、ループを抜ける
    {
      break;
    }
  } else {
    break;
  }
}
while($num>=7) {//$numが7以上
  $i=7; //$iは7だよ、7で割るよ
  if(($num%$i) ==0){
    //元の値 /素数の余りが0
//    echo ($num /= $i).'<br>';//5で割るよ
     $num /= $i;if($firstflg==true){
       echo "7";
       $firstflg=false;
     } else {
       echo "x7";
     }
    if($num<=1)//$numより1が小さいか等しい場合、ループを抜ける
    {
      break;
    }
  } else {
    break;
  }
}
  if ($num>1) {
    echo "<br>".$num.'が残りました〜。';
  }
}
// while($num>2){//$numが2超えだったらループに入っていいよ
// echo $num /= 2;//2で割るよ
// if($num<=1)//$numより1が小さいか等しい場合、ループを抜ける
// {
// break;
// }
// }
// //  echo '1桁の素因数は：'.$num.'だよ
