<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Удаление файла</title>
</head>
<body>
	<h1>
		<?php 
			$del = $_GET['file'];
			unlink('files/'.$del);
		?>
		<?php 
		header('Location: index2.php');
	?>
	</h1>
</body>
</html>