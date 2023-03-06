<?php
$number=0;
$sum=0;
$firstTenNumbers=0;
while ($firstTenNumbers !=10){
    $number++;
    if ($number%2==0){
        $sum+=$number;
        $firstTenNumbers++;
    }
}
echo $sum;
?>
