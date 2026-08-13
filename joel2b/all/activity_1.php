<?php

    $number_1 = 10;
    $number_2 = 20;
    $number_3 = 30;
    $number_4 = 40;

    $sum = $number_1 + $number_2;
    $difference = $number_3 - $number_2;
    $product = $number_1 * $number_4;
    $division = $number_4 / $number_2;

    $total = $sum + $difference + $product + $division;
    $ave = $total / 4;
    
    echo "<br>The sum of $number_1 and $number_2 is <b>$sum</b> <br>
    <br>The difference of between $number_2 and $number_3 is <b>$difference</b> <br>
    <br>The product of $number_1 and $number_4 is <b>$product</b><br>
    <br>The division of $number_4 and $number_2 is  <b>$division</b><br>
    <br>The total of all result is <b>$total</b><br>
    <br>The average of all result is <b>$ave</b>"
    ;
?>
