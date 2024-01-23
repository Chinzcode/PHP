<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//To implement interface, use implements keyword
// Interface definition
interface Animal {
    public function makeSound();
  }

// Class definitions
class Cat implements Animal {
    public function makeSound() {
        echo " Meow ";
    }
}

class Dog implements Animal {
    public function makeSound() {
        echo " Bark ";
    }
}

class Mouse implements Animal {
    public function makeSound() {
        echo " Squeak ";
    }
}

$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

foreach($animals as $animal) {
    $animal->makeSound();
}
//Result = "Meow Bark Squeak";
?>
</body>
</html>