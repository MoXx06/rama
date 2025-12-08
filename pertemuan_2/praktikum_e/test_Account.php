<?php

$acc = new Account("Rani", 5000, "1234");

echo $acc->owner;               // boleh, karena public
echo $acc->getBalance("1234");  // boleh, lewat method public

echo $acc->balance;             // ERROR: protected property
echo $acc->pin;                 // ERROR: private property
