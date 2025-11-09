<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .table {
            background: #ffffff;              
            padding: 25px 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        input[type="submit"] {
            background: #2990ff;
            color: white;
            border: none;
            padding: 5px 17px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.5s;
        }

        .table a {
            display: inline-block; 
            background: #298be8ff;         
            color: #fff;
            text-decoration: none;              
            font-weight: 500;
            padding: 8px 20px;
            border-radius: 10px;
            margin-top: 15px;
        }

        .table a:hover { 
            background: #155a9c;
        }


    </style>
</head>
<body>
    <?php
    header("Content-Type: text/html; charset=utf-8");

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "StudentsDB";

    $conn = mysqli_connect($host, $user, $pass, $db);
    if (!$conn) {
        die("Қате: деректер базасына қосылу мүмкін емес!");
    }
    
    $search = isset($_GET['search']) ? trim($_GET['search']) : "";

    if ($search == "") {
        $query = "SELECT * FROM students";
    } else {
        $query = "SELECT * FROM students 
                WHERE first_name LIKE '%$search%' 
                OR last_name LIKE '%$search%'";
    }

    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "Сұраныс қатесі!";
        exit;
    }

    if (mysqli_num_rows($result) == 0) {
        echo "<p>Нәтиже табылмады</p>";
    } else {
        echo "<div class='table'>";
        echo "<table border='1'>
                <tr>
                    <th>Аты</th>
                    <th>Тегі</th>
                    <th>Жасы</th>
                    <th>Қала</th>
                    <th>Оқу орны</th>
                    <th>Курс</th>
                    <th>Топ</th>
                </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['first_name']}</td>
                    <td>{$row['last_name']}</td>
                    <td>{$row['age']}</td>
                    <td>{$row['city']}</td>
                    <td>{$row['institution']}</td>
                    <td>{$row['course']}</td>
                    <td>{$row['group_name']}</td>
                </tr>";
        }
        echo "</table>";
        
        echo "</div>";
    }

    mysqli_close($conn);
    ?>

        
</body>
</html>