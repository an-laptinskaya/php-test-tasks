<?php

function fibonacciLengthBiggerThan($num)
{
    $fibNum1 = "0";
    $fibNum2 = "1";
    $result = "";
    while(strlen($result) < $num)
    {
        $result = sumOfBigInt($fibNum1, $fibNum2);
        $fibNum1 = $fibNum2;
        $fibNum2 = $result;
    }
    return $result;
}

function sumOfBigInt($str1, $str2): string
{

    if (strlen($str1) > strlen($str2)) {
        $temp = $str1;
        $str1 = $str2;
        $str2 = $temp;
    }
    $str3 = "";
    $n1 = strlen($str1);
    $n2 = strlen($str2);
    $diff = $n2 - $n1;
    $carry = 0;
    for ($i = $n1 - 1; $i >= 0; $i--) {
        $sum = ((ord($str1[$i]) - ord('0')) +
            ((ord($str2[$i + $diff]) -
                ord('0'))) + $carry);
        $str3 .= chr($sum % 10 + ord('0'));
        $carry = (int)($sum / 10);
    }
    for ($i = $n2 - $n1 - 1; $i >= 0; $i--) {
        $sum = ((ord($str2[$i]) - ord('0')) + $carry);
        $str3 .= chr($sum % 10 + ord('0'));
        $carry = (int)($sum / 10);
    }
    if ($carry)
        $str3 .= chr($carry + ord('0'));
    return strrev($str3);
}

?>