<?php

class Animal{
    function makeSound(){
        echo "Some generic animal sound\n";
    }
}

class Dog extends Animal{
    public function makeSound() {
        echo "Bark\n";
    }
}


class Cat extends Animal {
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