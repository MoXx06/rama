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

class ProdukPromo extends ProdukDiskon {
    private float $extraPromo = 0.10;

    public function getHarga(): int {
        $harga = parent::getHarga();
        return (int) ($harga * (1 - $this->extraPromo));
    }
}


$laptop = new ProdukDiskon("Laptop", 10000000, 0.15);
$laptop1 = new ProdukDiskon("Laptop", 10000000, 0.10); // diskon 10%
$laptop2 = new ProdukDiskon("Laptop", 10000000, 0.25); // diskon 25%
echo "Harga setelah diskon: Rp" . $laptop->getHarga() . "\n";
echo "Harga diskon 10% : Rp" . $laptop1->getHarga() . "\n";
echo "Harga diskon 25% : Rp" . $laptop2->getHarga() . "\n";
$promo = new ProdukPromo("Laptop", 10000000, 0.15);
echo $promo->getHarga(); // hasil lebih murah lagi