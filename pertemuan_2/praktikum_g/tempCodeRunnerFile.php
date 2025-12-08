<?php
$logger = new class {
public function log(string $message) {
echo "[LOG] $message\n";
}
};
$logger->log("Sistem berjalan");