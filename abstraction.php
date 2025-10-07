<?php

abstract class UserProfile
{
    public $userName;
    public $age;
    public $userId;


    function __construct($userName, $age, $userId)
    {
        $this->userName = $userName;
        $this->age = $age;
        $this->userId = $userId;
    }
    abstract public function displayInfo();
}


class Student1 extends UserProfile {
    public $studentGrade;

    public function __construct($userName, $age, $userId, $studentGrade) {
        parent::__construct($userName, $age, $userId);
        $this->studentGrade = $studentGrade;
    }

    public function displayInfo() {
        echo "Student Name: {$this->userName}, Age: {$this->age}, ID: {$this->userId}, Grade: {$this->studentGrade}\n";
    }
}

$student1 = new Student1("Alice", 22, 201, "A+");
$student1->displayInfo();
?>
