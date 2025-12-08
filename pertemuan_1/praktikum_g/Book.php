<?php
// Book.php
require_once 'product.php';

class Book extends Product {
    public int $pages;

    public function __construct(string $name, float $price, int $weight, int $pages) {
        parent::__construct($name, $price, $weight); // panggil konstruktor parent
        $this->pages = $pages;
    }

    // override getInfo untuk menambahkan info halaman
    public function getInfo(): string {
        return parent::getInfo() . ", halaman: {$this->pages}";
    }
}