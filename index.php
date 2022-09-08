<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:ital,wght@1,100&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="index_style.css">
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

        <div class="above_text1">
            <div class="block1">
                <div class="text_main1">
                    <p><strong>Крафтовое сыроделие</strong> —
                        это нечто иное, как творчество и сравнить его можно с полотнами Рембрандта, Моне, Айвазовского,
                        и других мастеров, чьими картинами хочешь наслаждаться снова и снова.</p>
                    <p>
                        Натуральный сыр начинается даже не с молока, а с полей, лугов, труднодоступных козьих троп, где
                        растет самая вкусная, полезная и сочная травушка, с кристально чистой воды ручьев, яркого
                        солнца, с естественного ритма жизни полноценного козьего стада.</p>
                    <p>
                        И таких уголков нетронутой природы становится все меньше и меньше. Окрестности села Черга,
                        распложённого в Горном Алтае, являются одним из таких уголков. Именно тут пасутся наши козы, а в
                        самой Черге мы делаем натуральный козий сыр.
                    </p>
                </div>
                <div class="block1_img"></div>
            </div>
        </div>
        <div class="above_text2">
            <div class="block2">
                <div class="block2_img"></div>
                <div class="text_main2">
                    <p>Как мы пришли к пониманию натурального сыроделия и почему натуральный сыр может изготавливаться
                        только по технологиям доиндустриальной эпохи читайте в разделе о нас.</p>
                </div>
            </div>
        </div>

        <div class="sp_cart">
            <div class="cart_grid">
                <div class="product">
                    <img src="images/cheg.jpg" class="prod_images">
                    <div class="prod_info">
                        <h3>Сыр Чегень в меду<br>10500₽/кг</h3>
                    </div>
                    <div class="cont_btn">
                        <button class="minus_btn" data-id="minusbtn">-</button>
                        <input class="inp">
                        <button class="plus_btn" data-id="plusbtn">+</button>
                    </div>
                    <button class="prod_but" onclick="addinchart()">Добавить в корзину</button>
                    <div class="prod_dopinfo">
                        <p href="catalog.html"> что-то написано тут очень много что-то написано тут очень много что-то
                            написано тут очень много что-то написано тут очень много что-то написано тут очень много
                            что-то
                            написано тут очень много что-то написано тут очень много что-то написано тут очень много
                            что-то
                            написано тут очень много что-то написано тут очень много что-то написано тут очень много<a
                                href="catalog.html">...</a></p>
                    </div>
                </div>

                <div class="product">
                    <img src="images/belper.jpg" class="prod_images">
                    <div class="prod_info">
                        <h3>Сыр белпер кнолле<br>500₽/шт</h3>
                    </div>
                    <div class="cont_btn">
                        <button class="minus_btn" data-id="minusbtn">-</button>
                        <input class="inp">
                        <button class="plus_btn" data-id="plusbtn">+</button>
                    </div>
                    <button class="prod_but" onclick="addinchart()">Добавить в корзину</button>
                    <div class="prod_dopinfo">
                        <p href="catalog.html"> что-то написано тут очень много что-то написано тут очень много что-то
                            написано тут очень много что-то написано тут очень много что-то написано тут очень много
                            что-то
                            написано тут очень много что-то написано тут очень много что-то написано тут очень много
                            что-то
                            написано тут очень много что-то написано тут очень много что-то написано тут очень много<a
                                href="catalog.html">...</a></p>
                    </div>
                </div>

                <div class="product">
                    <img src="images/kachot.jpg" class="prod_images">
                    <div class="prod_info">
                        <h3>Сыр а-ля Качотта<br>10500₽/кг</h3>
                    </div>
                    <div class="cont_btn">
                        <button class="minus_btn" data-id="minusbtn">-</button>
                        <input class="inp">
                        <button class="plus_btn" data-id="plusbtn">+</button>
                    </div>
                    <button class="prod_but" onclick="addinchart()">Добавить в корзину</button>
                    <div class="prod_dopinfo">
                        <p href="catalog.html"> что-то написано тут очень много что-то написано тут очень много что-то
                            написано тут очень много что-то написано тут очень много что-то написано тут очень много
                            что-то
                            написано тут очень много что-то написано тут очень много что-то написано тут очень много
                            что-то
                            написано тут очень много что-то написано тут очень много что-то написано тут очень много<a
                                href="catalog.html">...</a></p>
                    </div>
                </div>

                <div class="product">
                    <img src="images/halum.jpg" class="prod_images">
                    <div class="prod_info">
                        <h3>Сыр для жарки Халлуми<br>10500₽/кг</h3>
                    </div>
                    <div class="cont_btn">
                        <button class="minus_btn" data-id="minusbtn">-</button>
                        <input class="inp">
                        <button class="plus_btn" data-id="plusbtn">+</button>
                    </div>
                    <button class="prod_but" onclick="addinchart()">Добавить в корзину</button>
                    <div class="prod_dopinfo">
                        <p href="catalog.html"> что-то написано тут очень много что-то написано тут очень много что-то
                            написано тут очень много что-то написано тут очень много что-то написано тут очень много
                            что-то
                            написано тут очень много что-то написано тут очень много что-то написано тут очень много
                            что-то
                            написано тут очень много что-то написано тут очень много что-то написано тут очень много<a
                                href="catalog.html">...</a></p>
                    </div>
                </div>

                <div class="product">
                    <img src="images/gaud.jpg" class="prod_images">
                    <div class="prod_info">
                        <h3>Сыр а-ля гауда<br>10500₽/кг</h3>
                    </div>
                    <div class="cont_btn">
                        <button class="minus_btn" data-id="minusbtn">-</button>
                        <input class="inp">
                        <button class="plus_btn" data-id="plusbtn">+</button>
                    </div>
                    <button class="prod_but" onclick="addinchart()">Добавить в корзину</button>
                    <div class="prod_dopinfo">
                        <p href="catalog.html"> что-то написано тут очень много что-то написано тут очень много что-то
                            написано тут очень много что-то написано тут очень много что-то написано тут очень много
                            что-то
                            написано тут очень много что-то написано тут очень много что-то написано тут очень много
                            что-то
                            написано тут очень много что-то написано тут очень много что-то написано тут очень много<a
                                href="catalog.html">...</a></p>
                    </div>
                </div>

                <div class="product">
                    <img src="images/drag.jpg" class="prod_images">
                    <div class="prod_info">
                        <h3>Cыр Зеленый Дракон<br>10500₽/кг</h3>
                    </div>
                    <div class="cont_btn">
                        <button class="minus_btn" data-id="minusbtn">-</button>
                        <input class="inp">
                        <button class="plus_btn" data-id="plusbtn">+</button>
                    </div>
                    <button class="prod_but" onclick="addinchart()">Добавить в корзину</button>
                    <div class="prod_dopinfo">
                        <p href="catalog.html"> что-то написано тут очень много что-то написано тут очень много что-то
                            написано тут очень много что-то написано тут очень много что-то написано тут очень много
                            что-то
                            написано тут очень много что-то написано тут очень много что-то написано тут очень много
                            что-то
                            написано тут очень много что-то написано тут очень много что-то написано тут очень много<a
                                href="catalog.html">...</a></p>
                    </div>
                </div>

                <div class="product">
                    <img src="images/parm.jpg" class="prod_images">
                    <div class="prod_info">
                        <h3>Пармезан<br>10500₽/кг</h3>
                    </div>
                    <div class="cont_btn">
                        <button class="minus_btn" data-id="minusbtn">-</button>
                        <input class="inp">
                        <button class="plus_btn" data-id="plusbtn">+</button>
                    </div>
                    <button class="prod_but" onclick="addinchart()">Добавить в корзину</button>
                    <div class="prod_dopinfo">
                        <p href="catalog.html"> что-то написано тут очень много что-то написано тут очень много что-то
                            написано тут очень много что-то написано тут очень много что-то написано тут очень много
                            что-то
                            написано тут очень много что-то написано тут очень много что-то написано тут очень много
                            что-то
                            написано тут очень много что-то написано тут очень много что-то написано тут очень много<a
                                href="catalog.html">...</a></p>
                    </div>
                </div>

                <div class="product">
                    <img src="images/tibet.jpg" class="prod_images">
                    <div class="prod_info">
                        <h3>Твердый сыр Тибет<br>10500₽/кг</h3>
                    </div>
                    <div class="cont_btn">
                        <button class="minus_btn" data-id="minusbtn">-</button>
                        <input class="inp">
                        <button class="plus_btn" data-id="plusbtn">+</button>
                    </div>
                    <button class="prod_but" onclick="addinchart()">Добавить в корзину</button>
                    <div class="prod_dopinfo">
                        <p href="catalog.html"> что-то написано тут очень много что-то написано тут очень много что-то
                            написано тут очень много что-то написано тут очень много что-то написано тут очень много
                            что-то
                            написано тут очень много что-то написано тут очень много что-то написано тут очень много
                            что-то
                            написано тут очень много что-то написано тут очень много что-то написано тут очень много<a
                                href="catalog.html">...</a></p>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">

            <div class="social_text">Присоединяйтесь:</div>
            <ul class="social_icons">

                <li><a class="social_icon_vk" href="https://vk.com/craftcheesealtai"
                        title="Крафтовые сыры горного алтая в ВК" target="_blank" rel="noopener"></a></li>
                <li><a class="social_icon_inst" href="https://www.instagram.com/craftcheesealtai"
                        title="Крафтовые сыры горного алтая в Instagram *Запрещено в РФ" target="_blank"
                        rel="noopener"></a></li>

            </ul>

        </footer>

    </div>
</body>

<script src="script/jquery-3.2.1.min.js"></script>
<script defer src="script/slider1.js"></script>
<script defer src="script/indexprodload.js"></script>
<script defer src="script/indexaddin.js"></script>

</html>