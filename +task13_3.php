<!DOCTYPE html>
<html lang="ru">
<head>
  <title>HTML-форма</title>
  <meta charset='utf-8'>
</head>
<body>

	3. Создайте скрипт, который читал бы содержимое текстового файла list.txt и выводил бы его содержимое в НТМL-форме 
	со списком флажков перед каждой из строк. После выбора флажков и нажатия на кнопку submit содержимое файла list.txt 
	необходимо переписать таким образом, чтобы выбранные строки были исключены.
	
	<h3> ГОТОВО! НУЖНО ТОЛЬКО СДЕЛАТЬ КОММЕНТАРИИ</h3>
	
	<form method='post'>
		
		<?php
			$file_name = 'list.txt';
			foreach (file($file_name) as $key => $a) {
				echo "<input type='checkbox' name='inbox[{$key}]' value='{$a}'/>" . $a . "<br />";
			}
			if (isset($_POST['inbox'])) {
				$arr = $_POST['inbox'];
			} else $arr = null;
			echo "Cодержимое файла list.txt, до удаления: " . "<br />";
			print_r(file($file_name));
			echo "<br />";
			if (isset($arr)) {
				file_put_contents($file_name, array_diff(file($file_name), $arr));
			}
			echo "Cодержимое файла list.txt, после удаления: " . "<br />";
			print_r(file($file_name));
			echo "<br />";
		?>
		<input type='submit' name='submit' value='submit' />
	</form>
</body>
</html>