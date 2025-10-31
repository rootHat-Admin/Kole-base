<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Аты</th>
            <th>Күні</th>
            <th>Уақыт</th>
        </tr>
        <?php 
            $file = fopen("users.txt", "r");

            while ($line = fgets($file)) {
                $user_data = explode(" ", $line);

                if (count($user_data) == 3) {
                    $user = htmlspecialchars($user_data[0]);  // 'name'
                    $date = htmlspecialchars($user_data[1]);  // '2025-10-30'
                    $time = htmlspecialchars($user_data[2]);  // '17:12:58'

                    echo "<tr>";
                    echo "<td>" . $user . "</td>";
                    echo "<td>" . $date . "</td>";
                    echo "<td>" . $time . "</td>";
                    echo "</tr>";
                }
            }

            fclose($file);
        
        ?>
        
    </table>
</body>
</html>