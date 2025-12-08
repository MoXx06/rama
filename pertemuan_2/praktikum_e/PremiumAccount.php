<?php
require "Account.php";

class PremiumAccount extends Account {
    public function debugBalance() {
        return $this->balance; // boleh karena protected
    }
}
