<?php

function outputAllDigitsFromAToB($a, $b)
{
    echo $a;
    if($a === $b)
    {
        return;
    }
    else{
        if($a < $b)
        {
            return outputAllDigitsFromAToB(++$a, $b);
        }
        else
        {
            return outputAllDigitsFromAToB(--$a, $b);
        }
    }
}

?>