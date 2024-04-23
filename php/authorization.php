<?php
session_start();
error_reporting(0);

if ($_SESSION['user']) {
    header('Location: ../home.php');
}
?>

<!-- <!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/profile.css">
    <script type="text/javascript" src="../js/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
</head>

<body style="background-image: radial-gradient(#0E5A6E,#5fbdce);">
    <div class="cont">
        
        <form>
            <label>Логин</label>
            <input type="text" name="login" class="login" placeholder="Введите свой логин">
            <label>Пароль</label>
            <input type="password" name="password" class="password" placeholder="Введите пароль">
            <button type="submit" class="login-btn">Войти</button>
            <p>
                У вас нет аккаунта? - <a href="reg.php">зарегистрируйтесь</a>!
            </p>
            <p class="msg"></p>
            <?php
            // if ($_SESSION['message']) {
            //     echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            // }
            // unset($_SESSION['message']);
            ?>
        </form>
    </div>
</body>

</html> -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/profile.css">
</head>
<body>

    <!-- Форма авторизации -->

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

    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/main.js"></script>

</body>
</html>