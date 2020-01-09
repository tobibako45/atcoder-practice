<?php
fscanf(STDIN, "%s %s %s", $a, $b, $c);
echo 21 < $a+$b+$c ? 'bust':'win';
?>

<?=array_sum(explode(" ",fgets(STDIN)))>21?bust:win;
