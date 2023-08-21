<?php

function stringToCamelCase($input)
{
    $input = ucfirst($input);
    $inputArr = str_split($input);
    for($i = 0; $i < count($inputArr); $i++)
    {
        if($inputArr[$i] === '-' || $inputArr[$i] === '_' || $inputArr[$i] === ' ')
        {
            $inputArr[$i + 1] = chr(ord($inputArr[$i + 1]) - 32); 
            array_splice($inputArr, $i, 1);
        }
    }
    return implode($inputArr);
}

?>