<?php

    $connect = mysqli_connect('localhost', 'root', '', 'pc');

    if (!$connect) {
        die('Error connect to DataBase');
    }