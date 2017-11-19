<?php
	$name = 'Александр';
	$age = 28;
	$email = 'info@mail.ru';
	$city = 'Москва';
	$aboutMe = 'Начинающий веб разработчик';
?>
<!DOCTYPE HTML>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Информация</title>
	</head>
	<body>
	
		<h1>Информация обо мне</h1>
		<table>
			<tr>
				<td style="width: 200px;">Имя</td>
				<td><?php echo $name; ?></td>
			</tr>
			<tr>
				<td>Возраст</td>
				<td><?php echo $age ?></td>
			</tr>	
			<tr>
				<td>Адрес электронной почты</td>
				<td><a href="mailto"><?php echo $email ?></a></td>
			</tr>	
			<tr>
				<td>Город</td>
				<td><?php echo $city ?></td>
			</tr>	
			<tr>
				<td>О себе</td>
				<td><?php echo $aboutMe ?></td>
			</tr>	
		</table>
	
	</body>
</html>