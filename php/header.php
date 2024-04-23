<header>
    <nav>
        <ul>
            <a href="../home.php">
                <li>
                    <img class="logo" src="../img/logo.png" alt="logo">
                </li>
             </a>
            <li><a href="#">Каталог</a>
                <ul>
                    <li><a href="#">Периферия и аксессуары</a>
                        <ul>
                            <li><a href="goods/list.php">Мыши</a></li>
                            <li><a href="#">Клавиатуры</a></li>
                            <li><a href="#">Наушники</a></li>
                            <li><a href="#">Микрофоны</a></li>
                            <li><a href="#">Мониторы</a></li>
                            <li><a href="#">Коврики для мыши</a></li>

                        </ul>
                    </li>
                    <li><a href="#">Системные блоки</a>
                        <ul>
                            <li><a href="gamepc.php">Оптимальные</a></li>
                            <li><a href="#">Мощные</a></li>
                            <li><a href="#">Кастомные</a></li>
                            <li><a href="#">Офисные</a></li>
                            <li><a href="#">Рабочие</a></li>
                            <li><a href="#">Конфигуратор ПК</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">Конфигуратор</a></li>
            <li><a href="#">Услуги</a></li>
            <li>
                <ol>
                    <li><a href="#"><img class="profile" src="../img/korzina.png"></a></li>
                    <?php
                    error_reporting(0);
                    if (!$_SESSION['user']['name']) : ?>
                        <li><a href="#"><img class="profile" src="../img/profile.png"></a>
                            <ul>
                                <li><a href="../php/authorization.php">Войти</a></li>
                                <li><a href="../php/reg.php">Зарегистрироваться</a></li>
                            </ul>
                        </li>
                    <? else : ?>
                        <li><a>Привет, <?= $_SESSION['user']['name'] ?></a></li>
                        <li>
                            <a href="../php/vender/logout.php">
                                <img class="profile" src="../img/exit.png">
                            </a>
                        </li>
                    <? endif ?>
                    <li><a href="tel:+79999999999"><img class="profile" src="../img/phone.png"></a></li>
                </ol>
            </li>
        </ul>
    </nav>
</header>