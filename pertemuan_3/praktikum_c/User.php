<?php
class User {
    public function __construct(
        public string $name = "Guest",
        public int $age = 0
    ) {}
}

//$u1 = new User();                 // name = Guest, age = 0
//$u2 = new User("Dika");           // name = Dika , age = 0
$u3 = new User("Rani", 22);

//echo $u1->name . " - " . $u1->age . "\n";   // Guest - 0
//echo $u2->name . " - " . $u2->age . "\n";   // Dika - 0
echo $u3->name . " - " . $u3->age . "\n";   // Rani - 22