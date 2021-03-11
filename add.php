<?php
// Проверка на заполненность всех полей данными
if (empty($_POST["name"] or $_POST["name"] = "") or empty($_POST["login"] or $_POST["login"] = "")
    or empty($_POST["password"] or $_POST["password"] = "")) {
    echo "Все поля должны быть заполнены <br>";
    echo "<a href='main.html'>Пройти регистрацию заново</a>";
    die();
}
$name = $_POST["name"];
$login = $_POST["login"];
$password = $_POST["password"];
// Хэширование пароля перед записью в базу данных с использованием соли
$password = md5($password . "nbhgujl");
// Подключение к базе данных
$mysql = new mysqli("127.0.0.1", "root", "root", "user_bd", 3306);
// Запрос к базе данных на сохранение введенных имени, логина и пароля в соответствующие поля таблицы базы данных
$mysql->query("INSERT INTO `usersdata` (`name`, `login`, `password`) VALUES ('$name', '$login', '$password')");
$mysql->close();

header("Location: main.html");