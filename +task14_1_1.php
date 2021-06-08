<!DOCTYPE html>
<html lang="ru">
<head>
  <title>HTML-форма</title>
  <meta charset='utf-8'>
</head>
<body>

<?php
    session_start();
    $time=getdate()['hours'] + 5;

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