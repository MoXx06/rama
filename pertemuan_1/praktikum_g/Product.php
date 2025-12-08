<?php
// Product.php
class product {
    public string $name;
    public int|float $price; // bisa int atau float
    public int $weight; // dalam gram

    public function __construct(string $name, float $price, int $weight) {
        $this->name   = $name;
        $this->price  = $price;
        $this->weight = $weight;
    }

    public function getInfo(): string {
        return "{$this->name} - Rp{$this->price}, berat: {$this->weight} gram";
    }
}