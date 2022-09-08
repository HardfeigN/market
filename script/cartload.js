var cart = { "prod": [] };
$(document).ready(load());
function load() {
    $.getJSON('script/prod.json', function (data) {
        if (localStorage.getItem('cart') !== null) cart = JSON.parse(localStorage.getItem("cart"));
        if (data["prod"].length % 4 == 0) k = data["prod"].length / 4;
        else k = data["prod"].length / 4 + 1;
        var i = 0;
        var s = "";
        while (i < cart["prod"].length) {
            if (cart["prod"][i]) {
                var ind = 0;
                var b = true;
                while (b) {
                    if (cart["prod"][i][0] == data["prod"][ind]["name"]) b = false;
                    else ind++;
                }
                s += `<div class=\"product\"><img src=\"images/${data["prod"][ind]["img"]}\" class=\"prod_images\"><div class=\"prod_info\"><h3>${data["prod"][ind]["title"]}<br>${data["prod"][ind]["price"]}₽/кг</h3></div><div class=\"cont_btn\"><button class=\"minus_btn\" data-index-number=\"${data["prod"][ind]["type"]}\" data-id=\"${data["prod"][ind]["name"]}\">-</button><input class=\"inp\" data-id=\"${data["prod"][ind]["name"]}\"><button class=\"plus_btn\" data-index-number=\"${data["prod"][ind]["type"]}\" data-id=\"${data["prod"][ind]["name"]}\">+</button></div><button class=\"del_but\" data-id=\"${data["prod"][ind]["name"]}\">Удалить из корзины</button><div class=\"prod_dopinfo\"><p href=\"catalog.html\">${data["prod"][ind]["description"]}<a href=\"catalog.html\">...</a></p></div></div>`;
            }
            i++;
        }
        $('.cart_grid').html(s);
        i = 0;
        while (i < cart["prod"].length) {
            if (cart["prod"][i]) {
                var ind = 0;
                var b = true;
                while (b) {
                    if (cart["prod"][i][0] == data["prod"][ind]["name"]) b = false;
                    else ind++;
                }
                if (data["prod"][ind]["type"] == 0) $(`input[data-id=${data["prod"][ind]["name"]}`).val(`${cart["prod"][i][1]}гр`);
                else $(`input[data-id=${data["prod"][ind]["name"]}`).val(`${cart["prod"][i][1]}шт`);
            }
            i++;
        }
    });
}