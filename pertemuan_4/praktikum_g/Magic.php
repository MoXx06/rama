<?php
class Demo {
    private array $data = [];

    public function __get($name) {
        echo "Membaca property $name\n";
        return $this->data[$name] ?? null;
    }

    public function __set($name, $value) {
        echo "Mengisi property $name dengan $value\n";
        $this->data[$name] = $value;
    }

    public function __call($name, $args) {
        echo "Method $name dipanggil dengan argumen: ";
        print_r($args);
    }
}

$obj = new Demo;

$obj->foo = 123;

echo $obj->foo . "\n";

$obj->bar("tes");

$obj->xyz(10, 20);

echo $obj->random;

$obj->foo = "string";
$obj->foo = [1,2,3];
$obj->foo = true;
