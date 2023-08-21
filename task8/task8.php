<?php

class Matrix
{
    private $twoDimArr;
    private $numOfRows;
    private $numOfCols;

    public function __construct($arr)
    {
        $this->setNumOfRowsAndCols($arr);
        $this->setTwoDimArr($arr);
    }

    public function setTwoDimArr($arr)
    {
        $this->twoDimArr = $arr;
    }

    public function setNumOfRowsAndCols($arr)
    {
        $numOfRows = count($arr);
        $numOfCols = count($arr[0]);
        if ($numOfRows <= 0) {
            throw new Exception('Class Matrix only accepts non-empty two dimensional arrrays!');
        }
        foreach ($arr as $value) 
        {
            if($numOfCols < count($value))
            {
                throw new Exception("Class Matrix only accepts fully filled two dimentional arrays!");
            }
        }
        $this->numOfRows = $numOfRows;
        $this->numOfCols = $numOfCols;
    }

    public function getTwoDimArr()
    {
        return $this->twoDimArr;
    }

    public function getNumOfRows()
    {
        return $this->numOfRows;
    }

    public function getNumOfCols()
    {
        return $this->numOfCols;
    }

    public function printMatrix()
    {
        foreach ($this->twoDimArr as $row) 
        {
            foreach ($row as $col) 
            {
                echo $col . " ";
            }
            echo "<br>";
        }
    }

    public function matrixAddition(Matrix $newMatrix)
    {
        if($this->numOfRows !== $newMatrix->getNumOfRows())
        {
            throw new Exception("The number of rows must be equal!");
        }
        if($this->numOfCols !== $newMatrix->getNumOfCols())
        {
            throw new Exception("The number of columns must be equal!");
        }
        $resultMatrix = [];
        for ($i = 0; $i < $this->numOfRows; $i++) 
        { 
            for ($j = 0; $j < $this->numOfCols; $j++) 
            { 
                $resultMatrix[$i][$j] = $this->twoDimArr[$i][$j] + $newMatrix->twoDimArr[$i][$j];
            }
        }
        return new Matrix($resultMatrix);
    }

    public function multiplicationByNumber($numb)
    {
        $resultMatrix = [];
        for ($i = 0; $i < $this->numOfRows; $i++) 
        { 
            for ($j = 0; $j < $this->numOfCols; $j++) 
            { 
                $resultMatrix[$i][$j] = $this->twoDimArr[$i][$j] * $numb;
            }
        }
        return new Matrix($resultMatrix);
    }

    public function matrixMultiplication(Matrix $newMatrix)
    {
        if($this->numOfCols !== $newMatrix->numOfRows)
        {
            throw new Exception("The number of columns of the first matrix and the number of rows of the second matrix must be equal!");
        }
        $resultMatrix = [];
        for ($i = 0; $i < $this->numOfRows; $i++) 
        { 
            for ($j = 0; $j < $this->numOfCols; $j++) 
            { 
                $resultMatrix[$i][$j] = 0;
                for ($k = 0; $k < $this->numOfCols; $k++) 
                { 
                    $resultMatrix[$i][$j] += $this->twoDimArr[$i][$k] * $newMatrix->twoDimArr[$k][$j];
                }
            }
        }
        return new Matrix($resultMatrix);
    }
}

?>