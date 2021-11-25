<?php
include 'fruit.php';
class Strawberry extends Fruit {
    public $strawName;
    public $color;
    public function __construct($name, $color)
    {
        $this->strawName = $name;
        $this->color = $color;
    }

    public function message() {
        echo "Are you retarded ?  ";
    }
}