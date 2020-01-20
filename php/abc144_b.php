<?php
fscanf(STDIN, "%s", $n);
// $n = trim(fgets(STDIN));

$answer = 'No';
for ($i = 1; $i <= 9; $i++) {
    if ($n % $i === 0 && $n / $i <= 9) {
        $answer = 'Yes';
    }
}
echo $answer;

######
// $ans = "No";
// for($i=1; $i<=9; $i++){
//     if($n%$i == 0 && $n/$i <= 9) $ans = "Yes";
// }

// echo $ans;
