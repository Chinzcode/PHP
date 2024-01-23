<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
class Fruit {
    // Properties
    private $name;
    private $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    //Methods
    public function get_name() {
        return $this->name;
    }

    public function get_color() {
        return $this->color;
    }

    public function intro() {
        echo "Fruit: {$this->name}, Color: {$this->color}. <br>";
    }
}

$apple = new Fruit('Apple', 'Red');
$apple->intro();

//The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.
class Strawberry extends Fruit {
    public function message() {
        echo "Strawberry is inherited from Fruit <br>";
    }
}

$strawberry = new Strawberry('Strawberry', 'red');
$strawberry->message();
$strawberry->intro();

?>

</body>
</html>