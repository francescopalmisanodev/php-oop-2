<?php
require_once __DIR__ . '/product.php';
class food extends product
{
    public $expiration;
    public $provenance;
    public $intollerance;
    public function __construct($name, $price, $description, $brand, $expiration, $provenance, $intollerance)
    {
        parent::__construct($name, $price, $description, $brand);
        $this->expiration = $expiration;
        $this->provenance = $provenance;
        $this->intollerance = $intollerance;
    }
}
