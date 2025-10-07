<?php

class AnyUser
{
    public $name;
    public $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

class Staff extends AnyUser
{
    private $salary;

    function __construct($name, $age, $salary)
    {
        parent::__construct($name, $age);
        $this->salary = $salary;
    }

    public function display()
    {
        echo "Name: {$this->name}, Age: {$this->age}, Salary: {$this->salary}\n";
    }
}


$staffMember = new Staff("John Doe", 30, 50000);
$staffMember->display();