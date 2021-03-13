<?php
// Проверка поля логина и пароля на наличие символов

if (empty($_POST["login"] or $_POST["login"] = "")
    and empty($_POST["password"] or $_POST["password"] = "")) {
    echo "<h1 style='font-size: 220%; text-align: center; margin-top: 100px; font-family: monospace; color: #ff0000'>Все поля должны быть заполнены !!!</h1> <br><br><br>";
    echo "<button style='margin: 100px 0px 0px 680px; height: 40px; background-color: green; text-align: center;' ><a style='text-decoration: none; color: aliceblue'  href='login.html' class='btn btn-success'>Введите верные данные</a></button>";
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

    echo "<h1 style='font-size: 220%; text-align: center; margin-top: 100px; font-family: monospace; color: #ff0000'>Такой пользователь не существует !!!</h1> <br><br><br>";
    echo "<button style='margin: 100px 0px 0px 680px; height: 40px; background-color: green; text-align: center;' ><a style='text-decoration: none; color: aliceblue'  href='login.html' class='btn btn-success'>Вернуться к регистрации</a></button>";


    exit();
}


// Выдает временную куку пользователю, который вошел на 300 секунд

setcookie("id", $result["id_user"], time() + 300, "/");
$mysql->close();

header("Location: correct.php");

