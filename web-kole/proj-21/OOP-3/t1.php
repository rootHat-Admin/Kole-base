<?php
class BankAccount {
    public $balance = 0;

    public function deposit($amount) {
        echo "Баланс: " . $this->balance = $amount . " тг <br>";
    }

    public function withdrawal($amount) {
        $this->balance -= $amount;
        echo "Шығару: $amount, қалған: " . $this->getBalance() . "<br>";
    }

    public function getBalance() {
        return $this->balance;
    }
}

$b = new BankAccount();
$b->deposit(123500);
$b->withdrawal(200);
?>

//skynet@skynet:~/Desktop/web2/web-kole/proj-21$ php -S localhost:8000