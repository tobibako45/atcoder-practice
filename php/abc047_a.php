<?php
fscanf(STDIN, "%d %d %d", $a, $b, $c);
$max = max($a, $b, $c);
echo ($max * 2 == $a + $b + $c) ? 'Yes' : 'No';
