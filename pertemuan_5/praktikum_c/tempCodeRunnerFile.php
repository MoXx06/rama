<?php

class Produk
{

    protected string $nama;
    protected int $harga;

    public function __construct(string $nama, int $harga)
    {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function getHarga(): int
    {
        return $this->harga;
    }
}

class ProdukDiskon extends Produk
{
    private float $diskon;

    public function __construct(string $nama, int $harga, float $diskon)
    {
        parent::__construct($nama, $harga);
        $this->diskon = $diskon;
    }

    public function getHarga(): int
    {
        $hargaAsli = parent::getHarga();
        return (int) ($hargaAsli * (1 - $this->diskon));
    }
}

$laptop = new ProdukDiskon("Laptop", 10000000, 0.15);
echo "Harga setelah diskon: Rp" . $laptop->getHarga();