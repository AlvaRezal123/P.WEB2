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

class Printer {
    public function print(Animal $animal) {
     echo $animal->getName() . " says " . $animal->makeSound() . "<br>";
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


$dog = new Dog("Buddy");
$cat = new Cat("Kitty");
$sheep = new sheep("mbee");
$printer = new Printer();
$printer->print($dog); // Output: Buddy says Woof!
$printer->print($cat); // Output: Kitty says Meow!
$printer->print($sheep);
?>