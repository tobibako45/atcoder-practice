<?php

# 一行目、整数
fscanf(STDIN, "%d", $i);
# ２行目、文字列
fscanf(STDIN, "%s", $s);

# 整数を割る２する
$l = $i / 2;

# 割った数字で、文字列を割る
// $str = str_split($s, $r); # str_split — 文字列を配列に変換する str_split ( string $string [, int $split_length = 1 ] ) : array
$str = substr($s, 0, $l); # substr — 文字列の一部分を返す substr ( string $string , int $start [, int $length ] ) : string
$ss = $str . $str;

# 割った文字列が、２度繰り返しか？
echo $s === $ss ? 'Yes' : 'No';


## 別解
fscanf(STDIN, "%d", $t);
fscanf(STDIN, "%s", $s);
$len = $t / 2;
$a = substr($s, 0, $len);
$a = $a . $a;

if ($a === $s) {
    echo 'Yes';
} else {
    echo 'No';
}


