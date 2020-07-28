<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);


$pass = md5($pass . 'qweeqwweqweqweewq1123');

$mysql = new mysqli('localhost', 'root', 'root', 'firstsite');

$result = $mysql->query("SELECT * FROM `main` WHERE `login` = '$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc();
if (count((array)$user) == 0) {
    echo "Такой пользователь не найден";
    exit();
}

setcookie('user', $user['name'], time() + 3600, "/");

$mysql->close();

header('Location:/');
