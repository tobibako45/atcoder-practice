<?php
fscanf(STDIN, "%s %s", $k, $x);

# 500 * $k
$total = 500 * $k;

# 以上だとYes、以下だとNo
echo $x <= $total ? 'Yes' : 'No';

