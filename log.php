<?php
$login = filter_var($_POST['login']);
$password = filter_var($_POST['password']);
$password=md5($password."sdlkhfbklqjw1123");

require "connect.php";
$result = $mysql->query("SELECT * FROM `users` WHERE `login`='$login' AND `password`='$password';");
$user = $result->fetch_assoc(); 
if (count($user) == 0) {
    echo "<script>alert(\"Неверный логин или пароль\");
    location.href='/index.php';</script>";
    exit;
}
setcookie('user', $user['id_user'], time() + 3600 * 24 * 7, "/");
header('Location: /index.php');
