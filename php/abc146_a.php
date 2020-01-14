<?php
// 週の配列
$week = ['SUN' => 7, 'MON' => 6, 'TUE' => 5, 'WED' => 4, 'THU' => 3, 'FRI' => 2, 'SAT' => 1];
// 表示
echo $week[trim(fgets(STDIN))];

#### 別解 ###########
// 週の配列
$week = ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'];
// 入力受け取り
fscanf(STDIN, "%s", $s);
// 表示
echo 7 - array_search($s, $week);

## array_search — 指定した値を配列で検索し、見つかった場合に対応する最初のキーを返す
