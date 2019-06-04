<?php
include '../controllers/goods.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Лист товаров</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <header class="header">
        <h1>Домашнее задание к 4 уроку.</h1>
    </header>
    <main>
        <div class="product-catalog">
            <?php foreach ($firstGoods as $good) {
    echo '<div class="product" data-id="'.$good['id'].'">';
    echo '<img src="https://via.placeholder.com/250x150.png" alt="picture">';
    echo '<div class="content">';
    echo '<h4>'.$good['name'].'</h4>';
    echo '<p class="description">'.$good['description'].'</p>';
    echo '<p class="price">'.$good['price'].' руб.</p>';
    echo '<button class="buy" type="button" value="'.$good['id'].'">В корзину</button>';
    echo '</div></div>';
} ?>
        </div>
        <p class="more"><button class="more-btn" type="button">Посмотреть ещё...</button></p>
    </main>
    <footer class="footer">
        <p> &copy; Все права защищены!</p>
    </footer>

    <script src="../public/script/jquery.js"></script>
    <script src="../public/script/main.js"></script>
</body>

</html>