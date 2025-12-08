<?php

$username = "rama";
$email = "ramansyasaya@gmail.com";
$errors = [];

// Validasi username 6–12 karakter
if (strlen($username) < 6 || strlen($username) > 12) {
    $errors['username'] = "Username must be between 6 and 12 characters";
}

// Validasi email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Invalid email format";
}

if ($errors) {
    print_r($errors);
} else {
    echo "Update profile berhasil!";
}