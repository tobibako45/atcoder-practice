<?php
fscanf(STDIN, "%d %d %d", $r, $g, $b);
// echo $t = $r.$g.$b;
echo (int)($r.$g.$b) % 4 === 0 ? 'YES' : 'NO';
