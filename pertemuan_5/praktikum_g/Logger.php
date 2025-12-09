<?php
interface Logger
{
    public function log(string $pesan): void;
}

class FileLogger implements Logger
{
    public function log(string $pesan): void
    {
        echo "Menulis ke file: $pesan\n";
    }
}

class ConsoleLogger implements Logger
{
    public function log(string $pesan): void
    {
        echo "Menampilkan ke konsol: $pesan\n";
    }
}

class DatabaseLogger implements Logger {
    public function log(string $pesan): void {
        echo "Menyimpan log ke database: $pesan\n";
    }
}

interface Notifier {
    public function kirim(string $msg): void;
}

class MultiLogger implements Logger, Notifier {
    public function log(string $pesan): void {
        echo "Log dicatat: $pesan\n";
    }

    public function kirim(string $msg): void {
        echo "Notifikasi dikirim: $msg\n";
    }
}


$lg = new ConsoleLogger();
$lg->log("Test log");

$db = new DatabaseLogger();
$db->log("Insert Log");

$ml = new MultiLogger();
$ml->log("System Ready");
$ml->kirim("Alert!!!");