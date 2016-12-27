<html>
<head></head>
<body>
<?php
//変数作成
$a = 2;
//代入
$a = 4;
//演算
$tasi = $a + 1; //足し算 5
$hiki = $a - 1; //引き算 3
$kake = $a * 2; //掛け算 8
$wari = $a / 2; //割り算 2
$amari = $a % 2; //剰余 0

echo $tasi. $hiki. $kake. $wari. $amari;

//定数作成
const A = 2;
//演算
$tasi = A + 1; //足し算 3
$hiki = A - 1; //引き算 1
$kake = A * 2; //掛け算 4
$wari = A / 2; //割り算 1
$amari = A % 2; //剰余 0

echo $tasi. $hiki. $kake. $wari. $amari;
?>
</body>
</html>
