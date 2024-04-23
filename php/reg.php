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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/profile.css">
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
</head>

<body style="background-image: radial-gradient(#0E5A6E,#5fbdce);">
    <div class="cont">
        <!-- Форма регистрации -->

        <form action="vender/signup.php" method="post" enctype="multipart/form-data">
            <label>Имя</label>
            <input type="text" name="name" placeholder="Введите Имя">
            <label>Логин</label>
            <input type="text" name="login" placeholder="Введите логин">
            <label>Почта</label>
            <input type="email" name="email" placeholder="Введите адрес почты">
            <label>Пароль</label>
            <input type="password" name="password" placeholder="Введите пароль">
            <label>Подтверждение пароля</label>
            <input type="password" name="repeat_pass" placeholder="Подтвердите пароль">
            <button type="submit">Зарегистрироваться</button>
            <p>
                У вас уже есть аккаунт? - <a href="authorization.php">авторизируйтесь</a>!
            </p>
            <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
            ?>
        </form>
    </div>
</body>

</html>