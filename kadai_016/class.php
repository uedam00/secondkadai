<?php
class Food {
    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function get_price() {
        return $this->price;
    }
}

class Animal {
    private $name;
    private $height;
    private $weight;

    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function get_height() {
        return $this->height;
    }
}

$food = new Food("potato", 250);
$animal = new Animal("dog", 60, 5000);

print_r($food);
print_r($animal);

echo "\n";
echo $food->get_price() . "\n";
echo $animal->get_height() . "\n";
?>
