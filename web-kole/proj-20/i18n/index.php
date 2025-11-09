<?php
// Получаем язык из параметра URL или ставим по умолчанию
$lang_code = $_GET['lang'] ?? 'en';

// Подключаем нужный языковой файл
include "lang_{$lang_code}.php";
?>
<!DOCTYPE html>
<html lang="<?= $lang_code ?>">
<head>
  <meta charset="UTF-8">
  <title><?= $lang['about'] ?></title>
</head>
<body>
  <h1><?= $lang['welcome'] ?></h1>
  <nav>
    <a href="?lang=en">English</a> |
    <a href="?lang=kz">Қазақша</a>
  </nav>
</body>
</html>
