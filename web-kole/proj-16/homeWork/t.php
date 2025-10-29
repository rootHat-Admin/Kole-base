<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Project</title>
</head>
<body>
    <h1> --- Валюта айырбастау --- </h1>

    <form action="t.php" method="POST">
        <label for="tg">Тенге ақша енгізіңіз:</label><br>
        <input type="number" name="tg" step="0.01" min=0 required><br><br>
    
        <input type="submit" value="Есептеу">
    </form>

    <?php 
        $tg = (float)$_POST['tg'];

        $rates = [
            "USD" => 0.0019,     // доллар АҚШ
            "EUR" => 0.0016,     // евро
            "CNY" => 0.0133,      // юань Қытай
            "UZS" => 22.3714,         // Өзбек сомы
            "KGS" => 0.1631,        // Қырғыз сомы
            "RUB" => 0.1495,       // рубль Ресей
            "TRY" => 0.0171,      // Түрік лирасы
            "IRR" => 78.125,       // Иран риалы
            "JPY" => 0.2833,       // жапон иенасы
            "SEK" => 0.0175       // Швед кронасы
        ];

        echo "<h3>Сіз енгізген сома: $tg KZT</h3>";
        
        foreach ($rates as $currency => $rate) {
            $converted = $tg * $rate;
            echo "<h4>$currency: $converted </h4>";
        }
?>
    
</body>
</html>