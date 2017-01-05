<html>
<head></head>
<body>
<?php

$param1 = $_GET['param1']; //総額
$param2 = $_GET['param2']; //個数
$param3 = $_GET['param3']; //商品種別

echo $param3.'<br>'; //商品種別
echo $param1.'<br>'; //総額

$result = $param1 / $param2;
echo '1個あたり'.$result.'円'.'<br>';//１個あたりの金額
if ($param1 >= 5000 ){
  //$param1が5000以上の場合ここに来ます
echo  '5000円以上購入なので5%のポイントが付きます';
}elseif($param1 >= 3000){
  //$param2が3000以上の場合ここに来ます
echo  '3000円以上購入なので4%のポイントが付きます';
}else{
  //それ以外は、ここに来ます
echo  'ポイントは付きません';
}
?>
</body>
</html>
