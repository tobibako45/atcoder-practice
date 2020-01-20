<?php
fscanf(STDIN, "%s %s", $a, $b);
echo $a<10 && $b<10 ? $a*$b : -1;
