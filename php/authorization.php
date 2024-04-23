<?php
session_start();
error_reporting(0);

if ($_SESSION['user']) {
    header('Location: ../home.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/profile.css">
</head>

<body style="background-image: radial-gradient(#0E5A6E,#5fbdce);">
    <div class="cont">
        <form>
            <label>Логин</label>
            <input type="text" name="login" placeholder="Введите свой логин">
            <label>Пароль</label>
            <input type="password" name="password" placeholder="Введите пароль">
            <button type="submit" class="login-btn">Войти</button>
            <p>
                У вас нет аккаунта? - <a href="reg.php">зарегистрируйтесь</a>!
            </p>
            <p class="msg none"></p>
        </form>
    </div>

    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/main.js"></script>

</body>

</html>