<?php
    session_start();
    require_once 'connect.php';

    error_reporting(0);

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "email" => $user['email']
        ];
        $response=[
            "status" => true
        ];
        echo json_encode($response);
        // header('Location: ../../home.php');

    } else {
        // $_SESSION['message'] = 'Не верный логин или пароль';
        // header('Location: ../authorization.php');
        $response=[
            "status" => false,
            "message" => 'Не верный логин или пароль'
        ];
        echo json_encode($response);
    }
?>
dffdsdf