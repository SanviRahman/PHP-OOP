<?php

class Engine1 {
    public function start(): void {
        echo "Engine started\n";
    }
    
    public function end(): void {
        echo "Engine stopped\n";
    }
}

class Car1 {
    private Engine1 $engine1;

    public function __construct(Engine1 $engine1) {
        $this->engine1 = $engine1; // loose coupling
    }

    public function start(): void {
        $this->engine1->start();
        echo "Car is starting\n";
    }

    public function stop(): void {
        $this->engine1->end();
        echo "Car is stopping\n";
    }
}


$myEngine1 = new Engine1();
$myCar1 = new Car1($myEngine1);
$myCar1->start();
$myCar1->stop();

?>