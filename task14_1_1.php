<!DOCTYPE html>
<html lang="ru">
<head>
  <title>HTML-форма</title>
  <meta charset='utf-8'>
</head>
<body>

<?php
    // запускаем сессию
    session_start();
    // присваиваем переменной $time время через функцию getdate() со сдвигом на 5 часов (коррекция времени по текущему часовому поясу)
    $time=getdate()['hours'] + 5;
    // в зависимости от времени суток выводим форму приветствие + имя и фамилию
    if ($time >= 5 & $time < 11) {
        echo "Доброе утро " . $_SESSION['name'] . " " . $_SESSION['fam'] . '!'; 
    } elseif ($time >= 11 & $time < 16) {
        echo "Добрый день " . $_SESSION['name'] . " " . $_SESSION['fam'] . '!'; 
    } elseif ($time >= 16 & $time <= 23) {
        print_r("Добрый вечер " . $_SESSION['name'] . " " . $_SESSION['fam'] . '!'); 
    } elseif ($time >= 0 & $time < 5) {
        echo "Доброй ночи " . $_SESSION['name'] . " " . $_SESSION['fam'] . '!'; 
    }
?>

</body>
</html>