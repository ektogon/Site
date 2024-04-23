<?php
session_start();
require_once 'connect.php';

error_reporting(0);

$name = $_POST['name'];
$email = $_POST['email'];
$login = $_POST['login'];
$pass = $_POST['password'];
$r_pass = $_POST['repeat_pass'];

$_SESSION['message'] = '';

if ($pass === $r_pass) {

    $pass = md5($pass);
    
    if(!mysqli_query($connect, "INSERT INTO `users` 
    (`id`, `name`, `email`, `login`, `password`) 
    VALUES (NULL, '$name', '$email', '$login','$pass')")){
        $_SESSION['message'] = 'Такой логин уже занят!';
        header('Location: ../reg.php');
    } else{
        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../authorization.php');
    }
   

    
} else {
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: ../reg.php');
}