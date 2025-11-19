<?php 
class User {
    public static $userCount = 0;

    public $name;

    public function __construct($name) {
        $this->name = $name;
        self::$userCount++;
    }

    public static function showCount() {
        echo "Jalpi koldanushilar: " . self::$userCount;
    }
}

$a1 = new User("Aslan");
$a2 = new User("Etb-0923-2");

User::showCount(); 
?>