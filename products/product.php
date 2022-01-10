<?php
class product
{
    public $name;
    public $price;
    public $description;
    public $brand;

    public function __construct($name, $price, $description, $brand)
    {
        $this->name = $name;
        $this->price = $price;
        $this->brand = $brand;
        $this->description = $description;
    }
}
