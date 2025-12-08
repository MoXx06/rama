<?php
// DVD.php
require_once 'product.php';

class DVD extends Product {
    public int $duration; // dalam menit

    public function __construct(string $name, float $price, int $weight, int $duration) {
        parent::__construct($name, $price, $weight);
        $this->duration = $duration;
    }

    // override getInfo untuk menambahkan durasi
    public function getInfo(): string {
        return parent::getInfo() . ", durasi: {$this->duration} menit";
    }
}
