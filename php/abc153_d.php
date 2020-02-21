<?php

##### すげー
function getCount($h)
{
    $count = 1;

    if ($h > 1) {
        # モンスターの体力が1より大きかったら、割る２の
        $count += getCount(floor($h / 2)) * 2;
    }
    return $count;
}

// fscanf(STDIN, "%d", $h);
// echo getCount($h);


###
// fscanf(STDIN, "%d", $h);

// $cnt = 0;
// $ans = 1;
// while ($h > 1) {
//     $h = floor($h /2);
//     $cnt++;
//     $ans = $ans + 2 ** $cnt;
// }
// echo $ans;


#######
fscanf(STDIN, "%d", $n);
$hp = $n;
$num = 1;
$ans = 0;
while($hp > 0){

    // intdiv — 整数値の除算
    $hp = intdiv($hp, 2);
    $ans += $num;
    $num *= 2;

}

echo $ans;
