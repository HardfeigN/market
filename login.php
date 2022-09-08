<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:ital,wght@1,100&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="login_style.css">
    <title>Трезвая коза</title>
</head>

<body class="body">
    <div class="page">
        <div class="header">
            <div class="header_logo">Семейная сыродельня "Трезвая коза"</div>
            <nav class="nav">
                <a class="nav_link" href="index.php">Главная</a>
                <a class="nav_link" href="catalog.php">Каталог</a>
                <a class="nav_link" href="cart.php">Корзина</a>
                <a class="nav_link" href="about.php">О нас</a>
                <?php if (($_COOKIE['user'] ?? '') === ''): ?>
                <a class="nav_link" href="login.php">Войти</a>
                <?php else: ?>
                <a class="nav_link" href="exit.php">Выйти</a>
                <?php endif; ?>
            </nav>
        </div>
        <div class="log_page">
            <div class="cont_log">
                <form name="log_form" action="log.php" method="POST">

                    <h1 class="log_title">Вход</h1>

                    <div class="loginput_form">
                        <input class="log_text" type="text" placeholder=" " name="login" id="login">
                        <label class="log_label">Логин</label>
                    </div>


                    <div class="loginput_form">
                        <input class="log_text" type="password" placeholder=" " name="password" id="password">
                        <label class="log_label">Пароль</label>
                    </div>


                    <div class="loginput_form">
                        <button class="log_button">Войти</button>
                    </div>
                    <a class="reg_link" href="registration.php">Зарегистрироваться</a>

                </form>
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
    </div>
</body>

<script src="script/jquery-3.2.1.min.js"></script>
<script src="script/cartload.js"></script>
<script src="script/cartchange.js"></script>

</html>