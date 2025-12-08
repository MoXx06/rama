<?php
class Counter {
    public static int $count = 0;  // property static
    public const LABEL = "Jumlah objek"; // konstanta

    public function __construct() {
        self::$count++;             // increment setiap objek dibuat
    }

    public static function reset() {
        self::$count = 0;           // reset nilai counter
    }
    
}
new Counter();
new Counter();
new Counter();

Counter::reset();
echo Counter::$count;