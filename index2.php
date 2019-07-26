<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Скачать или удалить файл</title>
</head>
<body>
	<?php
		$uploadfile = "files/".$_FILES['file']['name'];
  		move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
		echo 'Строка добавлена!';
	?>
	<a href="index.php">Back</a>
	<ul>
		<?php  
			$files = scandir('files/');

			foreach ($files as $file) {
				?>
			    <li><?=$file;?><a href="delete.php?file=<?=$file?>">Удалить</a><a href="download.php?file=<?=$file?>"> Скачать</a></li>

			    <?php

			}


		?>

	
	</ul>
</body>
</html>