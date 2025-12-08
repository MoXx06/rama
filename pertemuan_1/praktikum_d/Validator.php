<?php

// Validator.php (OOP)
class Validator
{
    private array $errors = [];

    public function checkTextLength(string $field, string $value, int $min, int $max): void
    {
        $len = strlen($value);

        if ($len < $min || $len > $max) {
            $this->errors[$field] = "{$field} must be between {$min} and {$max} characters";
        }
    }

    public function checkEmail(string $field, string $value): void
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field] = "Invalid email format";
        }
    }

    public function fails(): bool
    {
        return !empty($this->errors);
    }

    public function errors(): array
    {
        return $this->errors;
    }
}
