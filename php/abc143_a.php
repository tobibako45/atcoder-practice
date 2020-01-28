<?php
fscanf(STDIN, "%s %s", $a, $b);
// echo $a-$b*2<0 ? 0 : $a-$b*2;

##### 確かに！max()はマイナスは0を返す
echo max($a - $b * 2, 0);
