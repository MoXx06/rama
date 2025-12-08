<?php

class Validator_Encapsulation {
    protected $_inputType = "POST";  // contoh properti internal
    protected $errors = [];

    protected function addError($field, $message) {
        $this->errors[$field] = $message;
    }

    public function checkTextLength($field, $value, $min, $max) {
        if (strlen($value) < $min || strlen($value) > $max) {
            $this->addError($field, "$field must be between $min and $max characters");
        }
    }
}

// buat object
$val = new Validator_Encapsulation();

// COBA AKSES PROPERTY PROTECTED (sesuai instruksi modul)
$val->_inputType = $_GET;   // ← ini HARUS ERROR

echo "Jika muncul tulisan ini berarti error tidak bekerja.";