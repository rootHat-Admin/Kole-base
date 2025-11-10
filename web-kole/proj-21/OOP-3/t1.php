<?php
class BankAccount {
    public $balance = 0;

    public function deposit($amount) {
        echo "Баланс: " . $this->balance = $amount . " тг <br><hr><br>";
    }

    public function withdrawal($amount) {
        if ($amount > $this->balance) {
            echo "Баланстағы қаражат жеткіліксіз!<br>"; 
        } else {
            $this->balance -= $amount; 
            echo "Шығару: $amount тг<br>";
            echo "Қалған Баланс: " . $this->getBalance() . " тг <br>"; 
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}

$b = new BankAccount();
$b->deposit(12);
$b->withdrawal(13);
?>
