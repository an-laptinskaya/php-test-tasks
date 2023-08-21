<?php
require_once 'task8.php';

try {
    $arr = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
    $arr2 = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];

    $matrix = new Matrix($arr);
    $matrix2 = new Matrix($arr2);
    $matrix->printMatrix();
    echo "<br>";
    $matrix->matrixAddition($matrix2)->printMatrix();
    echo "<br>";
    $matrix->matrixMultiplication($matrix2)->printMatrix();
    echo "<br>";
    $matrix->multiplicationByNumber(3)->printMatrix();
} 
catch (\Throwable $th) {
    echo 'Caught exception: ',  $th->getMessage(), "\n";
}


?>