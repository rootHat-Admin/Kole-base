<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>t1</title>
</head>
<body>
    <?php
        $products = ['Нан' => 120, 'Сүт' => 250];

    ?>

    <table border="1">
        <tr>
            <th>Өнім</th>
            <th>Бағасы</th>
        </tr>
        <?php 
            foreach ($products as $product => $price) {
            echo "<tr>";
            echo "<td> $product </td>";
            echo "<td> $price </td>";
            echo "</tr>";
        }
        ?>
        
    </table>
    
</body>
</html>