<?php

interface Animal{
    function makeSound();
}

class Dog implements Animal{
    public function makeSound() {
        echo "Bark\n";
    }
}


class Cat implements Animal {
    public function makeSound() {
        echo "Meow\n";
    }
}


function animalSound(Animal $animal) {
    $animal->makeSound();
}


$dog = new Dog();
$cat = new Cat();

animalSound($dog);
animalSound($cat);