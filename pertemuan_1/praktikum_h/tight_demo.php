<?php
// tight_demo.php

class QueryMySQL {
    public function getData(string $sql) {
        // contoh sederhana: return "mysql_result" (menunjukkan ketergantungan tipe mysqli/mysql)
        return "mysql_result_of: {$sql}";
    }
}

class Display {
    // display mengharapkan mysql_result string khusus
    public function show($mysqlResult) {
        echo "Menampilkan hasil MySQL: " . $mysqlResult . PHP_EOL;
    }
}

// pemakaian
$query  = new QueryMySQL();
$result = $query->getData("SELECT * FROM products");

$display = new Display();
$display->show($result);