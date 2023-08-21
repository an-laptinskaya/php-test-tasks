<?php

function birthdayCountdown($date)
{
    $now = time();
    $dateToTime = strtotime($date);
    if(date("md") > date("md", $dateToTime))
    {
        $birthday = mktime(0, 0, 0, date("m", $dateToTime), date("d", $dateToTime), date("Y") + 1);
    }
    else
    {
        $birthday = mktime(0, 0, 0, date("m", $dateToTime), date("d", $dateToTime), date("Y"));
    }
    $difference = $birthday - $now;
    $days = ($difference / 86400);
    return (int) $days;

}

?>