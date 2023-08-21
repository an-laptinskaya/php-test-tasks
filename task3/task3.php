<?php

function sumOfDigits($num)
{
    $arrayOfDigits = digitsToArray($num);
    while (count($arrayOfDigits) !== 1) 
    {
        $sum = 0;
        foreach ($arrayOfDigits as $value)
        {
            $sum += $value; 
        }
        $arrayOfDigits = array();
        $arrayOfDigits = digitsToArray($sum);
    }
    return $arrayOfDigits[0];
}

function digitsToArray($num)
{
    $num = strval($num);
    $res = [];
    for ($i = 0; $i < strlen($num); $i++)
    {
        $res[] = (int)$num[$i];
    }
    return $res;
}

?>