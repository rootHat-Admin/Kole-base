<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrow</title>
</head>
<body>
    <p> 
        <b><i>?php</i></b> <br><br>
            $students = ["Carmen", "BlacMan", "BlueMan", "Saga", "laga", "Maga"];<br><br>
        <b><i>?</i></b> <br><br>
        ol <br>
            <b><i>?php</i></b> foreach ($students as $student): <b><i>?</i></b> <br><br>
                li <b><i>?php</i></b> echo $student; <b><i>?</i></b>  /li<br><br>
            <b><i>?php</i></b> endforeach; <b><i>?</i></b> <br><br>
        /ol
    </p>

    <br>
    <hr>


    <?php 
        $students = ["Carmen", "BlacMan", "BlueMan", "Saga", "laga", "Maga"];
    ?>
    <ol>
        <?php foreach ($students as $student): ?>
            <li><?php echo $student; ?> </li>
        <?php endforeach; ?>
    </ol>
</body>
</html>


