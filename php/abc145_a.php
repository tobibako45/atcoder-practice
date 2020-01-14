<?php
fscanf(STDIN, "%d", $a);
echo $a * $a;

### 別解1
$s = trim(fgets(STDIN));
echo $s**2; //** 演算子

### 別解2
echo pow(trim(fgets(STDIN)),2);
