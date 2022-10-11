<?php
function calc(string $primer): int
{
    $arrZnaki = ['!', '@', '#', '%' . '^', '&', '_', '?', '$', '='];
    $arr = str_split($primer);
    $arrLength = count($arr); //9;
    for ($i = 0; $i < $arrLength; $i++) {
        if (in_array($arr[$i], $arrZnaki)) {
            unset($arr[$i]);
        }
        while (ctype_alpha($arr[$i])) {
            unset($arr[$i]);
        }
    }
    $arrNew = implode($arr);
    return eval("return $arrNew;");
}
echo calc("!?1aadattggssf+2adada-?4=*7/#1a=&");
?>