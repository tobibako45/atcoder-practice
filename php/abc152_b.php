<?php
fscanf(STDIN, "%s %s", $a, $b);
$aa = str_repeat($a, $b);
$bb = str_repeat($b, $a);
echo strcmp($aa, $bb) < 0 ? $aa : $bb;


#####
list($a, $b) = explode(" ", trim(fgets(STDIN)));
echo ($a < $b) ? str_repeat($a, $b) : str_repeat($b, $a);
