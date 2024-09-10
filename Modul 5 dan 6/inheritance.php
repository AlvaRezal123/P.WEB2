<?php
class Animal {
    protected $name;
    public function __construct($name) {
    $this->name = $name;
    }

    public function getName() {
    return $this->name;
    }
    }

class Dog extends Animal {
    public function makeSound() {
    return "Woof!";
    }
    }

class Cat extends Animal {
    public function makeSound() {
    return "Meow!";
    }
    }

class Sheep extends Animal {
    public function makesound() {
        return "mbee";
    }
    }

$dog = new dog ("puppy");
echo $dog->getname(). " katakan ". $dog->makeSound();
?>