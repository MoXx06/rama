<?php
require "UserConstruct.php";

$u = new UserConstruct("Budi", 22);

echo $u->name . " - " . $u->age;
