<?php
require_once 'task9.php';

$student1 = new Student("Peter", "Parker", 2, 5);
$student2 = new Student("Jack", "Sparrow", 1, 4.5);
$student3 = new Student("Fox", "Mulder", 2, 4);
$student4 = new Aspirant("Dana", "Scully", 3, 5);

$groupOfStudents = [$student1, $student2, $student3, $student4];
foreach ($groupOfStudents as $student)
{
    echo "Last name: " .$student->getLastName() .", scholarship: ". $student->getScholarship() . "USD;<br>";
}

?>