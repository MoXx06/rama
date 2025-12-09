<?php
class Product
{
    private string $sku;
    public function __construct(string $sku)
    {
        $this->sku = $sku;
    }

    public function setSku(string $sku): void
    {
        $this->sku = $sku;
    }
}
$p->setSku("SKU-999");
echo $p->getSku(); // SKU berubah (identitas tidak lagi tetap)
