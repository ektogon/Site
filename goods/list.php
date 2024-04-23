<?php
session_start();
include '../h.php';
require '../php/footer.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/list.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php include '../php/header.php'?>
    <div class="container">
        <ol>
            <?php $i = 1;
            foreach ($info2 as $data) : ?>
                <div class="item">
                    <a href="#"><img src="<?= $data['link_img'] ?>" alt=""></a>
                    <div class="headd">
                        <a href="#">
                            <p><?= $data['name'] ?></p>
                        </a>
                    </div>
                    <?php if ($data['in_stock'] != 0) { ?>
                        <div class="headd">
                            <h1>В наличии</h1>
                        </div>
                    <?php  } else { ?>
                        <div class="headd">
                            <h2>Под заказ</h2>
                        </div>
                    <?php } ?>
                    <div class="flex">
                        <div class="headd">
                            <h3>Цена <?= $data['price'] ?> ₽</h3>
                            <h4>Рассрочка</h4>
                        </div>
                        <a href="#">
                            <div class="flex bbuy">
                                <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="7.3" cy="17.3" r="1.4"></circle>
                                    <circle cx="13.3" cy="17.3" r="1.4"></circle>
                                    <polyline fill="none" stroke="#000" points="0 2 3.2 4 5.3 12.5 16 12.5 18 6.5 8 6.5"></polyline>
                                </svg>
                                <p style="color: #000; padding-left:5px">Купить
                                <p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php if ($i % 3 == 0) : ?>
            </ol><ol>
        <?php endif; ?>
        <?php $i++; endforeach; ?>
        </ol>
    </div>
    <?= $footer;?>
</body>

</html>