<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Task 15.1</title>
  <meta charset='utf-8'>
</head>
<body>
  <!-- используем форму ввода, для отображения введенного запроса с сайта https://www.php.net -->
  <form method="POST">
    <input type="name" name="name_f">
    <input type="submit" value="submint">
    </form>

<?php
// подключаем файл с описанным классом Find
require_once('task16_1_class.php');
echo <<<'description'
16.1. Создайте класс с методом find () , принимающий единственный аргумент­ строку с названием функции РНР. В качестве результата метод должен возвра­щать текст с сайта http://php.net с описанием функции.
description;

    // В статический метод find класса Find передаем запрос с помощью глобального массива $_POST. Далее отображаем найденную страницу с сайте https://www.php.net
    echo "<br />";
    echo Find::find($_POST['name_f']);

?>

</body>
</html>