<!DOCTYPE html>
<html lang="ru">
<head>
  <title>HTML-форма</title>
  <meta charset='utf-8'>
</head>
<body>

2. Создайте форму, содержащую текстовую область 
textarea и кнопку submit. При нажатии на кнопку содержимое 
тестовой области должно сохраняться в файл content.txt. 
При повторной загрузке формы в другом окне содержимое файла 
content.txt должно подставляться в тестовую форму.

<!-- создаем форму состоящую из двух текстовых областей и кнопки отправки данных через метод post -->
    <form method='post'>
        <?php
            //присваиваем переменной имя, создаваемого файла
            $content = 'content.txt';
            /* проверка на существование данных в глобальном массиве $_POST['text_area']: если в текстовой области установлены данные, 
            то переменной присваиваем это значение, если данных в массиве нет, то переменной присваиваем пустую строку, 
            обозначающую, что в текстовую область данные не были внесены */
            if (isset($_POST['text_area'])) {
                $text_area = $_POST['text_area'];
            } else $text_area = '';
            // функция file_put_contents сохраняет данные из переменной $text_area в файл, имя которого берется из переменной $content в текущую директорию со скриптом
            file_put_contents ($content, $text_area);
            /* функция file_get_contents берет данные из файла content.txt, наименование которого находится в переменной $content, 
            из текущей директории со скриптом и далее эти данные присваивает переменной $get_file */
            $get_file=file_get_contents($content);
        ?>
        <textarea name='text_area'></textarea><br />
        <input type='submit' value='Send'><br />
        <!-- в текстовую область с именем text_area2 вставляем данные из переменной $get_file -->
        <textarea name='text_area2'><?= $get_file ?></textarea><br />
    </form>
</body>
</html>