<?php
require_once __DIR__ . '/product.php';
class book extends art
{
    public $pagesNumber;
    public function __construct($name, $price, $description, $brand, $author, $title, $pagesNumber)
    {
        parent::__construct($name, $price, $description, $brand, $author, $title);
        $this->pagesNumber = $pagesNumber;
    }
}
