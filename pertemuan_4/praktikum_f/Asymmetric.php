<?php
class Book
{
    public function __construct(
        public private(set) string $title,      // hanya class bisa ubah
        public protected(set) string $author    // subclass boleh ubah
    ) {}
}

class SubBook extends Book
{
    public function changeAuthor($newAuthor): void
    {
        $this->author = $newAuthor;   // ✔ BOLEH karena protected(set)
    }
}

$s = new SubBook("PHP", "Alice");
echo $s->author;          // ✔ bisa dibaca
$s->changeAuthor("Bob");  // ✔ berhasil ganti karena subclass
echo "\n" . $s->author;   // Output: Bob
