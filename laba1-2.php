<?php
$firstMassive = array();
$secondMassive = array();
function sumTime($timeFirst, $timeSecond)
{
    echo $timeFirst . "<br>", $timeSecond . "<br>";
    $firstMassive = explode(":", $timeFirst);
    $secondMassive = explode(":", $timeSecond);
    echo var_dump($firstMassive) . "<br>";
    echo var_dump($secondMassive) . "<br>";
    echo "<br>";
    $days = 1;
    $weeks = 1;
    $months = 1;
    $firstSumm = $firstMassive[0] + $secondMassive[0];
    $secondSumm = $firstMassive[1] + $secondMassive[1];
    $thirdSumm = $firstMassive[2] + $secondMassive[2];
    if ($thirdSumm >= 60) {
        $thirdSumm = $thirdSumm - 60;
        $secondSumm = $secondSumm + 1;
    }
    if ($secondSumm >= 60) {
        $secondSumm = $secondSumm - 60;
        $firstSumm = $firstSumm + 1;
    }
    echo $firstSumm . ":", $secondSumm . ":", $thirdSumm . "<br>";
    /* 
        здесь происходит счет дней, неделей и месяцев
    
    while ($firstSumm > 23) {
        $firstSumm = $firstSumm - 24;
        $days = $days + 1;
    }
    while ($days > 7) {
        $weeks = $weeks + 1;
        $days = $days - 7;
    }
    while ($weeks > 4) {
        $months = $months + 1;
        $weeks = $weeks - 4;
    }
    echo $days . "-й день<br>";
    echo $weeks . "-я неделя<br>";
    echo $months . "-й месяц<br>"; */
}
sumTime("10:20:30", "10:20:30");
