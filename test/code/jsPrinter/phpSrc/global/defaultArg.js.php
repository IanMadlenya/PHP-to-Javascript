<?php
function	getTotal($value1, $value2 = 5){
    return $value1 + $value2;
}

$mathTotal = getTotal(5);

assert_($mathTotal, 10);