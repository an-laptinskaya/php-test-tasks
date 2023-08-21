<?php

function deleteElemFromTheList($arr, $position)
{
    $resultArr = $arr;
    array_splice($resultArr, $position, 1);
    return $resultArr;
}

?>