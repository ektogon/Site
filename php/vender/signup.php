<?php

use function PHPSTORM_META\type;

session_start();
require_once 'connect.php';

error_reporting(0);

$name = $_POST['name'];
$email = $_POST['email'];
$login = $_POST['login'];
$pass = $_POST['password'];
$r_pass = $_POST['repeat_pass'];

$check_login = mysqli_query($connect, "SELECT*FROM `users` WHERE `login` = '$login'");
if (mysqli_num_rows($check_login) > 0) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Такой логин уже занят!",
        "fields" => ['login']
    ];
    echo json_encode($response);
    die();
}

$error_fields = [];

if ($login === '') {
    $error_fields[] = 'login';
}

if ($pass === '') {
    $error_fields[] = 'password';
}

if ($name === '') {
    $error_fields[] = 'name';
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error_fields[] = 'email';
}

if ($r_pass === '') {
    $error_fields[] = 'repeat_pass';
}

if (!empty($error_fields)) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Проверьте правильность полей",
        "fields" => $error_fields
    ];

    echo json_encode($response);

    die();
}

if ($pass === $r_pass) {

    $pass = md5($pass);

    mysqli_query($connect, "INSERT INTO `users` 
    (`id`, `name`, `email`, `login`, `password`) 
    VALUES (NULL, '$name', '$email', '$login','$pass')");

    $response = [
        "status" => true,
        "message" => "Регистрация прошла успешно!"
    ];
    echo json_encode($response);
} else {
    $response = [
        "status" => false,
        "message" => "Пароли не совпадают"
    ];
    echo json_encode($response);
}
