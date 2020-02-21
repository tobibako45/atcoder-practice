<?php

### B - Sum of Three Integers 3つの整数の合計

fscanf(STDIN, "%d %d", $k, $s);

$count = 0;
# 全部の場合の数を調べて、$sになるものだけカウント
#コレだと超過
// for ($x = 0; $x <= $k; $x++) {
//     for ($y = 0; $y <= $k; $y++) {
//         for ($z = 0; $z <= $k; $z++) {
//             if ($x+$y+$z === $s) {
//                 $count++;
//             }
//         }
//     }
// }

for ($x = 0; $x <= $k; $x++) {
    for ($y = 0; $y <= $k; $y++) {
        $z = $s-$x-$y;
        if ($z>=0 && $z<=$k) $count++;
    }
}
echo $count;


// for ($x = 0; $x<= $k; ++$x) {
// for (int y = 0; y <= K; ++y) {
//     for (int z = 0; z <= K; ++z) {
//         if (x + y + z == S) {
//             ++count;
//         }
//     }
//     }
// }
