<?php
$logger = new class {
    public function log(string $message)
    {
        echo "[LOG] $message\n";
    }
};
new class("INFO") {
    public function __construct(public string $level) {}
    public function log(string $msg)
    {
        echo "[$this->level] $msg";
    }
};
$logger->log("Sistem berjalan");