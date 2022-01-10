<?php
require_once __DIR__ . '/product.php';
class art extends product
{
    public $author;
    public $title;
    public function __construct($name, $price, $description, $brand, $author, $title)
    {
        parent::__construct($name, $price, $description, $brand);
        $this->author = $author;
        $this->title = $title;
    }
}
