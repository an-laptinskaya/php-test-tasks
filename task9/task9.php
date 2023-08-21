<?php

class Student
{
    private $firstName;
    private $lastName;
    private $group;
    private $averageMark;

    public function __construct($firstName, $lastName, $group, $averageMark)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->group = $group;
        $this->averageMark = $averageMark;
    }
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function getGroup()
    {
        return $this->group;
    }
    public function getAverageMark()
    {
        return $this->averageMark;
    }
    public function getScholarship()
    {
        if ($this->averageMark === 5) 
        {
            return $scholarship = 100;
        }
        else 
        {
            return $scholarship = 80;
        }
    }
}

class Aspirant extends Student
{
    public function getScholarship()
    {
        if ($this->averageMark === 5) 
        {
            return $scholarship = 200;
        }
        else 
        {
            return $scholarship = 180;
        }
    }
}

?>