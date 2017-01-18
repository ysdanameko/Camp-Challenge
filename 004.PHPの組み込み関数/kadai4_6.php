<?php

/*
【文字数の取得】
自分のメールアドレスの
「@」以降の文字を取得して、表示してください。
*/

$add = "ysdanameko@gmail.com";
echo "$add ＠以下の文字列は、";
echo strstr($add, '@'); //指定文字列以降を取得する
echo "です。";
