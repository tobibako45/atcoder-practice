<?php
fscanf(STDIN, "%d %d", $n, $k);

$n; //モンスターの数
$k; //必殺ワザの使える回数

# モンスターの体力（数分
$monsters = explode(" ", trim(fgets(STDIN)));
# 逆順にsort
rsort($monsters);

// if ($n <= $k) {
//     echo 0;
//     return;
// }
//
// if ($k===0) {
//     echo array_sum($monsters);
//     return;
// }

// var_dump($monsters);
// $split = array_slice($monsters, 0, $k);
// var_dump($split);
// echo array_sum(array_slice($monsters, 0, $k));

# array_spliceだと、0とかできない
// echo array_sum(array_splice($monsters, 0, $k));

#
echo array_sum(array_slice($monsters, $k));


################
// list($n, $k) = explode(" ", trim(fgets(STDIN)));
// $hList = explode(" ", trim(fgets(STDIN)));
//
// rsort($hList);
// echo array_sum(array_slice($hList, $k))."\n";
