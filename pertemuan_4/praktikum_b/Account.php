<?php
class Account {
    private float $balance = 0;

    public function getBalance(): float {
        return $this->balance;
    }

public function setBalanceRaw(float $amount): void {
    $this->balance = $amount; // Tanpa pengecekan!
}

}

$acc = new Account();
$acc->setBalanceRaw(-20000);
echo $acc->getBalance();

