<?php
require_once __DIR__ . '/product.php';
class disk extends art
{
    public $lenght;
    public function __construct($name, $price, $description, $brand, $author, $title, $lenght)
    {
        parent::__construct($name, $price, $description, $brand, $author, $title);
        $this->lenght = $lenght;
    }
}
