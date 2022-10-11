<?php
function calc(string $primer): int
{
	$arrZnaki = ['!', '@', '#', '%' . '^', '&', '_', '?', '$', '='];
	echo $primer . "<br>";
	echo var_dump($primer) . "<br>";
	$arr = str_split($primer);
	echo "<br>";
	print_r($arr);
	echo "<br>";
	$arrLength = count($arr); //9;
	for ($i = 0; $i < $arrLength; $i++) {
		if (in_array($arr[$i], $arrZnaki)) {
			unset($arr[$i]);
		}
		while (ctype_alpha($arr[$i])) {
			unset($arr[$i]);
		}
	}
	print_r($arr);
	echo "<br>";
	$arrDump = var_dump(implode($arr));
	$arrNew = implode($arr);
	echo $arrDump . "<br>";
	echo $arrNew . "<br>";
	return eval("return $arrNew;");
}
echo calc("!?1aadattggssf+2adada-?4=*7/#1a=&");
?>
<!-- 
------------------------------------------------------------------------старый код
function calc($primer)
{
    $resultatik = eval("return $primer;");
    if (is_string($resultatik)) {
        echo "Ошибочка";
    } else {
        echo $resultatik;
    }
}
calc("5.6*4.5");
-->