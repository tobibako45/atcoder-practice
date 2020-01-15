<?php
$n = trim(fgets(STDIN));
$s = trim(fgets(STDIN));
// echo mb_substr_count($s, 'ABC'); // mb_substr_countだとエラーになった
echo substr_count($s, 'ABC');
