<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:ital,wght@1,100&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="registration_style.css">
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
        <div class="reg_page">  
            <div class="cont">
                <form name="reg_form" action="reg.php" method="post">

                    <h1 class="reg_title">Регистрация</h1>
                    <div class="reginput_form">
                        <input class="reg_text" type="text" placeholder=" " name="login" id="login">
                        <label class="reg_label">Логин</label>
                    </div>
                    <div class="reginput_form">
                        <input class="reg_text" type="text" placeholder=" " name="email" id="email">
                        <label class="reg_label">E-mail</label>
                    </div>
                    <div class="reginput_form">
                        <input class="reg_text" type="text" placeholder=" " name="phone" id="phone">
                        <label class="reg_label">Телефон</label>
                        </div>
                    <div class="reginput_form">
                        <input class="reg_text" type="password" placeholder=" " name="password" id="password">
                        <label class="reg_label">Пароль</label>
                        </div>
                    <div class="reginput_form">
                        <input class="reg_text" type="password" placeholder=" " name="povt_password" id="povt_password">
                        <label class="reg_label">Повторите пароль</label>
                        </div>
                    <div class="reginput_form">
                        <input class="reg_text" type="text" placeholder=" " name="name" id="name">
                        <label class="reg_label">Имя</label>
                        </div>
                    <div class="reginput_form">
                        <input class="reg_text" type="text" placeholder=" " name="fam" id="fam">
                        <label class="reg_label">Фамилия</label>
                        </div>
                    <div class="reginput_form">
                        <input class="reg_text" type="text" placeholder=" " name="location" id="location">
                        <label class="reg_label">Город</label>
                        </div>
                    <div class="reginput_form">
                        <input class="reg_text" type="text" placeholder=" " name="addres" id="addres">
                        <label class="reg_label">Адрес</label>
                        </div>
                    <div class="reginput_form">
                        <input class="reg_text" type="text" placeholder=" " name="index" id"index">
                        <label class="reg_label">Индекс</label>
                        </div>

                    <div class="reginput_form">
                        <button class="reg_button">Зарегистрироваться</button>                
                    </div>
                    <a class="forg_pass" href="login.php">Войти</a>
                    
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