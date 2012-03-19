<?php
	/*
	ЗАДАНИЕ 1
	- Запустите сессию
	- Создайте переменную result со значением "пустая строка"("")
	- Проверьте, была ли отправлена форма
	- Проверьте, существует ли сессионная переменная randStr
		- Если переменная randStr существует и её значение равно значению введённому пользователем,
			присвойте переменной result значение "Правильно"
		- Если переменная randStr существует и её значение не равно значению введённому пользователем,
			присвойте переменной result значение "НЕ правильно"
		- Если переменная randStr не существует,
			присвойте переменной result значение "ВКЛЮЧИ ГРАФИКУ!"		
	*/
session_start();
$result = "";
if ($_SERVER['REQUEST_METHOD'] == "POST"){
	$str = strtoupper(trim(strip_tags($_POST['str'])));
	if (isset($_SESSION['randStr']) ){
		if ($_SESSION['randStr'] === $str) $result = "Правильно";
		else $result = "НЕ правильно";
	}else $result = "ВКЛЮЧИ ГРАФИКУ!";
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>Регистрация</title>
</head>
<body>
<h1>Регистрация</h1>
<form action="" method="post">
	<div>
		<img src="noise-picture.php">
	</div>
	<div>
		<label>Введите строку</label>
		<input type="text" name="str" size="6">
	</div>
	<input type="submit" value="OK">
</form>
<?php 
	/*
	ЗАДАНИЕ 2
	- Выведите значение переменной result
	*/
echo $result;
?>
</body>
</html>
