<?php
$a=12;
$b=31;
$c=8;
$x1 = (-$b + sqrt($b*$b-4*$a*$c))/(2*$a);
$x2 = (-$b - sqrt($b*$b-4*$a*$c))/(2*$a);
echo "x1=".round($x1, 2);
echo "\nx2=".round($x2, 2);
?>
