<?php

class Item {

    private $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName()
    {
        echo $this->name;
    }

    public function getPrice()
    {
        echo $this->price;
    }

}