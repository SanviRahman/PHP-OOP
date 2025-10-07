<?php

class Car {
    public $name;
    public $model;

    function __construct($name,$model){
        $this->name = $name;
        $this->model = $model;
    }

    function intro(){
        echo "The Car is {$this->name} and the model is {$this->model}\n";
    }
}

class vehicle extends Car{
    public function message(){
        echo "This is vechical";
    }
}
$naam = new vehicle("Tesla","BM202");
$naam->intro();
$naam->message();