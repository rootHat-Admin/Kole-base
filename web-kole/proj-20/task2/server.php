<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>server</title>
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
    <div class="table">
    <table border="1">
        <?php 

        $servername = "localhost";  
        $username = "root";         
        $password = "";             
        $dbname = "myDB";      


        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if ($conn->connect_error) { die("Connection error: " . $conn->connect_error); }

        if (isset($_GET['search'])) {
            $search = $_GET['search'];

            $sql = "SELECT * FROM library WHERE author LIKE '%$search%' 
                    OR title LIKE '%$search%' 
                    OR your LIKE '%$search%' ";

            $result = mysqli_query($conn, $sql);

            echo "<h2>Іздеу нәтижелері: </h2>";

            if (mysqli_num_rows($result) > 0) {
                echo "<table border='1'>";
                echo "<tr><th>ID</th><th>Автор</th><th>Кітап атауы</th><th>Жыл</th></tr>";

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['author'] . "</td>";
                    echo "<td>" . $row['title'] . "</td>";
                    echo "<td>" . $row['your'] . "</td>";
                    echo "</tr>";
                }

                echo "</table>";
            } else {
                echo "Нәтиже табылмады";
            }
        }

        mysqli_close($conn);

        ?>

    </table>

    <a href="http://localhost/myproject/task2/inedx.html">Тағы іздеу</a>
    </div>
</body>
</html>