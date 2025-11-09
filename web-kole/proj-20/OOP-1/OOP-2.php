<?php

class Car {
    public $brand;
    public $year;
    public $color;
    public $speed = 0;
    public $image;

    public function accelerate($value) {
        $this->speed += $value;
        echo "<div class='info'>";
        echo "<h3>Көлік Ақпараты </h3>";
        echo "Көлік: " . $this->brand . "<br>";
        echo "Түсі: " . $this->color . "<br>";
        echo "Жылы: " . $this->year . "<br>";
        echo "Жылдамдық: " . $this->speed . " км/сағ<br>";
        echo "</div>";
        if ($this->image) {
            echo "<img src='" . $this->image . "' width='300px'><br>";
        }
    }
}

$imagePath = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['photo']) && $_FILES['photo']['error'] === 0) {
    $allowed = ["jpg", "png", "gif"];
    $filetype = strtolower(pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION));

    if (in_array($filetype, $allowed)) {
        $uploadDir = "carIMG/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $imagePath = $uploadDir . basename($_FILES['photo']['name']);
        move_uploaded_file($_FILES['photo']['tmp_name'], $imagePath);
    } else {
        echo "<h2 style='color: red;'>Bunday formatta dile juktelmedi!</h2>";
    }
}
?>

<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Upload</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data">
    <h1>Файл таңдаңыз:</h1>
    <input type="file" name="photo" required>
    <input type="submit" value="SEND">
</form>

<div class="info-2">
<?php

$car1 = new Car();
$car1->brand = "Toyota Camry 80";
$car1->color = "Red";
$car1->year = 2024;
$car1->image = $imagePath; 

$car1->accelerate(250);
?>

</div>

</body>
</html>
