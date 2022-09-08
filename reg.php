<?php
$login = filter_var($_POST['login']);
$email = filter_var($_POST['email']);
$phone = filter_var($_POST['phone']);
$password = filter_var($_POST['password']);
$povt_password = filter_var($_POST['povt_password']);
$name = filter_var($_POST['name']);
$fam = filter_var($_POST['fam']);
$loc = filter_var($_POST['location']);
$addr = filter_var($_POST['addres']);
$ind = filter_var($_POST['index']);

require "connect.php";
$result = $mysql->query("SELECT `login` FROM `users` WHERE `login`='$login';");
$exist_user = $result->fetch_assoc();
if (count($exist_user) > 0) {
    echo "<script>alert(\"Такой пользователь уже существует $login \");
    location.href='/Registration.html';</script>";
    exit;
} else if (mb_strlen($login) < 4 || mb_strlen($login) > 50) {
    echo "<script>alert(\"Недопустимая длина логина '$login'\");
    location.href='/Registration.html';</script>";
    exit;
} else if (mb_strlen($password) < 4 || mb_strlen($password) > 90) {
    echo "<script>alert(\"Недопустимая длина пароля\");
        location.href='/Registration.html';</script>";
    exit;
} else if (strcmp($password, $povt_password) != 0) {
    echo "<script>alert(\"Пароли не совпадают\");
    location.href='/Registration.html';</script>";
    exit;
}
$password=md5($password."sdlkhfbklqjw1123"); 
$mysql->query("INSERT INTO `users` (`login`,`email`,`phone`,`password`,`name`,`fam`,`location`,`addres`,`index`) VALUES('$login','$email','$phone','$password','$name','$fam','$loc','$addr','$ind');");
$result = $mysql->query("SELECT `id_user`  FROM `users` WHERE `login`='$login' AND `password`='$password';");
$user = $result->fetch_assoc();
setcookie('user', $user['id_user'], time() + 3600 * 24 * 7, "/");
header('Location: /index.php');
