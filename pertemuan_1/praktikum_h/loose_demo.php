<?php
// loose_demo.php

class Query {
    public function getData(string $sql): array {
        // contoh return array netral
        return [
            ['id' => 1, 'name' => 'Produk A'],
            ['id' => 2, 'name' => 'Produk B'],
        ];
    }
}

class Display {
    // Display hanya menerima array - tidak peduli sumber datanya
    public function show(array $data) {
        foreach ($data as $row) {
            echo "ID: {$row['id']}, Nama: {$row['name']}" . PHP_EOL;
        }
    }
}

// pemakaian
$query  = new Query();
$result = $query->getData("SELECT * FROM products");

$display = new Display();
$display->show($result);