<?php
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
