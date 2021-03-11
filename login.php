<?php
// Проверка поля логина и пароля на наличие символов

if (empty($_POST["login"] or $_POST["login"] = "")
    and empty($_POST["password"] or $_POST["password"] = "")) {
    echo "Все поля должны быть заполнены <br>";
    echo "<a href='login.html'>Введите верные данные</a>";
    die();
}


$login = $_POST["login"];
$password = $_POST["password"];

// Хэширование введенного в форму пароля до запроса в базу с добавлением в пароль "соли",эта функция(md5) уже не используется

$password = md5($password . "nbhgujl");
// Подключение к базе данных
$mysql = new mysqli("127.0.0.1", "root", "root", "user_bd", 3306);
// Запрос к базе данных на соответствие пароля и логина в соответствующих полях таблицы
$query = $mysql->query("SELECT * FROM `usersdata` WHERE `password` = '$password' AND `login` = '$login'");
// функция fetch_assoc создает ассоциативный массив в котором ключи являются полями в таблице базы данных
$result = $query->fetch_assoc();
//print_r($result);
//die();
// Проверка на корректность логина и пароля в базе данных
if (empty($result)) {

    echo "Такой пользователь не существует";
    exit();
}
// Выдает временную куку пользователю, который вошел на 30 секунд

setcookie("id", $result["id_user"], time() + 30, "/");
$mysql->close();

header("Location: correct.html");
