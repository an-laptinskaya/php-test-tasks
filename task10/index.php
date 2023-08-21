<?php
require_once 'task10.php';

try {
    $mycalc = new MyCalculator(12, 6);
    echo $mycalc->add();
    echo "<br>";
    echo $mycalc->multiply();
    echo "<br>";
    echo $mycalc->add()->divideBy(9);
} 
catch (\Throwable $th) {
    echo 'Caught exception: ',  $th->getMessage(), "\n";
}

?>