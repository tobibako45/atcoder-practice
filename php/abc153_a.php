<?php
fscanf(STDIN, "%d %d", $h, $a);

# モンスターの体力(h)を、何回(a)で0以下にできるか？

# ceil() 小数点以下を切り上げ
echo ceil($h/$a);
