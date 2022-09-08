<!DOCTYPE html>
<html lang="ru">

    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:ital,wght@1,100&display=swap"
            rel="stylesheet">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="about_style.css">
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
                    <?php if (($_COOKIE['user'] ?? '') === ''):?>
                    <a class="nav_link" href="login.php">Войти</a>
                    <?php else: ?>
                    <a class="nav_link" href="exit.php">Выйти</a>
                    <?php endif; ?>
                </nav>
            </div>

            <div class="for_split">
                <div class="page_split">
                    <div class="left_part">
                        <div class="docs_view">
                            <p>Наши статьи:</p>
                            <div class="for_spoiler one">
                                <div class="spoiler">
                                    <div class="spoiler_item">
                                        <div class="spoiler_title">Заголовок</div>
                                        <div class="spoiler_text">
                                            <iframe class="docs" src="docs/1.htm"></iframe>
                                        </div>
                                    </div>
                                </div>

                                <div class="spoiler">
                                    <div class="spoiler_item">
                                        <div class="spoiler_title">Заголовок2</div>
                                        <div class="spoiler_text">
                                            <iframe class="docs" src="docs/2.htm"></iframe>
                                        </div>
                                    </div>
                                </div>

                                <div class="spoiler">
                                    <div class="spoiler_item">
                                        <div class="spoiler_title">Заголовок3</div>
                                        <div class="spoiler_text">
                                            <iframe class="docs" src="docs/3.htm"></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="right_part">
                        <div class="right_info">Контактная информация:<br>Телефон: +79132639561<br>E-mail:
                            89132639561@mail.ru<br>Адрес: Респ. Алтай, Шебалинский р-н, с. Черга, ул. Горького д. 12</div>
                        <div class="map">
                            <div class="yand_map">
                                <iframe
                                    src="https://yandex.ru/map-widget/v1/?um=constructor%3Aef4a3dc1d7d75e6e21b5d4c6d85390524ce2232699fa53f017fddcba7b6179ff&amp;source=constructor"
                                    width="345" height="279" frameborder="0"></iframe>
                            </div>
                            <div class="google_map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4959.867487030111!2d85.55527030017686!3d51.56944813686596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42c413500c380261%3A0x8767491446f2c2ac!2z0JrRgNCw0YTRgtC-0LLRi9C1INC60L7Qt9GM0Lgg0YHRi9GA0Ysg0JPQvtGA0L3QvtCz0L4g0JDQu9GC0LDRjw!5e0!3m2!1sru!2sru!4v1661771093490!5m2!1sru!2sru"
                                    width="345" height="279" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="test"></div>
                <div class="footer">
                    <div class="social_text">Присоединяйтесь:</div>
                    <ul class="social_icons">
                        <li><a class="social_icon_vk" href="https://vk.com/craftcheesealtai"
                                title="Крафтовые сыры горного алтая в ВК" target="_blank" rel="noopener"></a></li>
                        <li><a class="social_icon_inst" href="https://www.instagram.com/craftcheesealtai"
                                title="Крафтовые сыры горного алтая в Instagram *Запрещено в РФ" target="_blank" rel="noopener"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
    <script src="script/jquery-3.2.1.min.js"></script>
    <script defer src="script/spoiler.js"></script>
    <script defer src="script/docsloader.js"></script>
    <script defer src="dir.php"></script>

</html>