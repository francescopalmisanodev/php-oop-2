<?php
require_once __DIR__ . '/product.php';
class clothes extends product
{
    public $size;
    public $materials;
    public $sex;
    public function __construct($name, $price, $description, $brand, $size, $materials, $sex)
    {
        parent::__construct($name, $price, $description, $brand);
        $this->size = $size;
        $this->materials = $materials;
        $this->sex = $sex;
    }
}
