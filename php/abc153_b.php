<?php
fscanf(STDIN, "%d %d", $h, $n);
$arr = explode(" ", fgets(STDIN));
echo $h <= array_sum($arr) ? 'Yes' : 'No';
