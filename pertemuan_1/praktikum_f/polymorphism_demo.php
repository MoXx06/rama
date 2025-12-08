<?php

// Class 1
class Car {
    public function accelerate() {
        echo "Car is accelerating smoothly...\n";
    }
}

// Class 2
class SportsCar {
    public function accelerate() {
        echo "SportsCar accelerates rapidly with turbo boost!\n";
    }
}

// Demonstrasi Polymorphism
function testAcceleration($vehicle) {
    // pemanggilan method sama
    $vehicle->accelerate();
}

// Object dari dua class berbeda
$car = new Car();
$sportsCar = new SportsCar();

// Output: berbeda walaupun pemanggilan method sama
testAcceleration($car);
testAcceleration($sportsCar);