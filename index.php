<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Загрузка файла</title>
</head>
<body>
	<form action="index2.php" method="POST" enctype = 'multipart/form-data'>
		<div>
			<input type="file" name="file" placeholder="Выберите файл" required> 
		</div>
		<div>
			<input type="submit">
		</div>
	</form>
</body>
</html>