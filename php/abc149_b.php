<?php
fscanf(STDIN, "%s %s %s", $a, $b, $k);

// # 高橋くんの行動 $k回繰り返す
// while ($k) {
//     # $aが0になったら、$bから-1
//     ($a === 0) ? $b-- : $a--;
//     $k--;
// }
// # $aと$bの残り
// echo $a;
// echo $b;

#### こういう考え方を鍛える
#### 1
echo $ea = max(0, $a - $k);
$eb = max(0, $b - max(0, $k - $a));
echo $ea . ' ' . $eb . PHP_EOL;

#### 2
if ($k - $a > 0) {
    $b = max(0, $b - ($k - $a));
    $a = 0;
} else {
    $a = $a - $k;
}
echo $a . " " . $b;

#### 組み込み関数 max()
// echo max(2, 3, 1, 6, 7);  // 7
// echo max(array(2, 4, 5)); // 5
//
// // 'hello' を int と比較するときは、0 と評価します。ふたつの値が
// // 等しくなるので、パラメータを渡した順によって結果が決まります
// echo max(0, 'hello');     // 0
// echo max('hello', 0);     // hello
//
// // -1 と 0 の比較なので、'hello' のほうが大きくなります
// echo max('hello', -1);    // hello
