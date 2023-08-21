<?php

class MyCalculator
{
    private $firstNum;
    private $secondNum;
    private $result;

    public function __construct($firstNum, $secondNum)
    {
        if (!is_numeric($firstNum) || !is_numeric($secondNum)) {
            throw new Exception("Class Calculator only accepts numeric values");
        }

        $this->firstNum = $firstNum;
        $this->secondNum = $secondNum;
    }
    public function add()
    {
        $this->result = $this->firstNum + $this->secondNum;
        return $this;
    }
    public function multiply()
    {
        $this->result = $this->firstNum * $this->secondNum;
        return $this;
    }
    public function divide()
    {
        $this->result = $this->firstNum / $this->secondNum;
        return $this;
    }
    public function subtract()
    {
        $this->result = $this->firstNum - $this->secondNum;
        return $this;
    }
    public function addBy($num)
    {
        $this->result += $num;
        return $this;
    }
    public function multiplyBy($num)
    {
        $this->result *= $num;
        return $this;
    }
    public function divideBy($num)
    {
        $this->result /= $num;
        return $this;
    }
    public function subtractBy($num)
    {
        $this->result -= $num;
        return $this;
    }
    public function __toString()
    {
        return $this->result . "";
    }
}

?>