<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <title>Нәтиже</title>
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

        .box {
            background: #ffffff;              
            padding: 25px 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .box button {
            display: inline-block; 
            background: #298be8ff;         
            color: #fff;
            border: none;
            font-weight: 500;
            padding: 8px 20px;
            border-radius: 10px;
            margin-top: 15px;
            margin-left: 3px;
            cursor: pointer;
            transition: 0.3s;
        }

        .box button:hover { 
            background: #155a9c;
        }

    </style>
</head>
<body>
    <?php
        $name = $_POST['name'] ?? '';
        $age = $_POST['age'] ?? '';
        $hobby = $_POST['hobby'] ?? '';
    ?>

    <div class="box">
        <h3>Сіз енгізген мәліметтер:</h3>
        <p><strong>Аты:</strong> <?= htmlspecialchars($name) ?></p>
        <p><strong>Жасы:</strong> <?= htmlspecialchars($age) ?></p>
        <p><strong>Хобби:</strong> <?= htmlspecialchars($hobby) ?></p>
    

    <hr>

    <?php
    echo "
    <script>
        function showMessage() {
            alert('Рахмет, $name, форманы толтырғаныңыз үшін!');
        }
    </script>
    ";

    $info = [
        "college" => "«Түркістан Ахмет Ясауи» кәсіби колледжі",
        "city" => "Түркістан",
        "course" => 3
    ];

    echo "
    <script>
        const info = " . json_encode($info, JSON_UNESCAPED_UNICODE) . ";
        document.write('<h4>Қосымша мәліметтер:</h4>');
        document.write('Оқу орны: ' + info.college + '<br>');
        document.write('Қала: ' + info.city + '<br>');
        document.write('Курс: ' + info.course + '<br>');

        document.write('<button onclick=\"showMessage()\">Функция</button>');
        document.write('<button onclick=\"window.location.href=\\'http://localhost/myproject/Denamika-2/\\'\">Артқа қайту</button>');
        document.write('</div>');
    </script>
    ";
    ?>

    <br>
    
</body>
</html>
