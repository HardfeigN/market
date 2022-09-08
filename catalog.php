<!DOCTYPE html>
<html lang="ru">
<div class="page">

    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="catalog_style.css">
        <title>Трезвая коза</title>
    </head>

    <body class="body">
        <div class="header">
            <div class="header_logo">Семейная сыродельня "Трезвая коза"</div>
            <nav class="nav">
                <a class="nav_link" href="index.php">Главная</a>
                <a class="nav_link" href="catalog.php">Каталог</a>
                <a class="nav_link" href="cart.php">Корзина</a>
                <a class="nav_link" href="about.php">О нас</a>
                <?php if (($_COOKIE['user'] ?? '') === ''):?>
                    <a class="nav_link" href="login.php" >Войти</a>
                <?php else: ?>
                <a class="nav_link" href="exit.php">Выйти</a>
                <?php endif; ?>

            </nav>
        </div>

        <div class="sp_cart">
            <div class="cart_grid">
            </div>
        </div>

        <footer class="footer">

            <div class="social_text">Присоединяйтесь:</div>
            <ul class="social_icons">

                <li><a class="social_icon_vk" href="https://vk.com/craftcheesealtai"
                        title="Крафтовые сыры горного алтая в ВК" target="_blank" rel="noopener"></a></li>
                <li><a class="social_icon_inst" href="https://www.instagram.com/craftcheesealtai"
                        title="Крафтовые сыры горного алтая в Instagram *Запрещено в РФ" target="_blank"
                        rel="noopener"></a>
                </li>

            </ul>

        </footer>
    </body>
</div>
<script src="script/jquery-3.2.1.min.js"></script>
<script src="script/prodload.js"></script>
<script src="script/addinchart.js"></script>

</html>