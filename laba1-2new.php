<?php
function sumTime(string $timeFirst, string $timeSecond): string
{
    $firstMassive = [];
    $secondMassive = [];
    $arrZnaki = ['!', '@', '#', '%' . '^', '&', '_', '?', '$']; // /0
    $arrFirst = str_split($timeFirst);
    $arrSecond = str_split($timeSecond);
    $arrLength = count(array_merge($arrFirst, $arrSecond));
    for ($i = 0; $i < $arrLength; $i++) {
        while (ctype_alpha($arrFirst[$i])) {
            unset($arrFirst[$i]);
        }
        while (ctype_alpha($arrSecond[$i])) {
            unset($arrSecond[$i]);
        }
        if (in_array($arrFirst[$i], $arrZnaki)) {
            unset($arrFirst[$i]);
        }
        if (in_array($arrSecond[$i], $arrZnaki)) {
            unset($arrSecond[$i]);
        }
    }
    $timeFirst = implode($arrFirst);
    $timeSecond = implode($arrSecond);
    $firstMassive = explode(":", $timeFirst);
    $secondMassive = explode(":", $timeSecond);
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
    while ($firstSumm > 23) {
        $firstSumm = $firstSumm - 24;
    }
    return $firstSumm . ":" . $secondSumm . ":" . $thirdSumm . "<br>"; //12:50:44
}
echo  sumTime("5!0:adad3dad!#adad0adad:3!1", "1!0:2adada0:1$3");
?>