$(document).ready(function () {
    $.getJSON('script/prod.json', function (data) {
        var s = "";
        var i = 0;
        var k = 0;
        if (data["prod"].length % 4 == 0) k = data["prod"].length / 4;
        else k = data["prod"].length / 4 + 1;
        $('.cart_grid').css('grid-template-rows', `repeat(${k}, 28vw)`);
        for (i; i < data["prod"].length; i++) {
            s += `<div class=\"product\"><img src=\"images/${data["prod"][i]["img"]}\" class=\"prod_images\"><div class=\"prod_info\"><h3>${data["prod"][i]["title"]}<br>${data["prod"][i]["price"]}₽/кг</h3></div><div class=\"cont_btn\"><button class=\"minus_btn\" data-index-number=\"${data["prod"][i]["type"]}\" data-id=\"${data["prod"][i]["name"]}\">-</button><input class=\"inp\" data-id=\"${data["prod"][i]["name"]}\"><button class=\"plus_btn\" data-index-number=\"${data["prod"][i]["type"]}\" data-id=\"${data["prod"][i]["name"]}\">+</button></div><button class=\"prod_but\" data-id=\"${data["prod"][i]["name"]}\">Добавить в корзину</button><div class=\"prod_dopinfo\"><p href=\"catalog.html\">${data["prod"][i]["description"]}<a href=\"catalog.html\">...</a></p></div></div>`;
        }
        $('.cart_grid').html(s);
        for (i = 0; i < data["prod"].length; i++) {
            if (data["prod"][i]["type"] == 0) $(`input[data-id=${data["prod"][i]["name"]}`).val('100гр');
            else $(`input[data-id=${data["prod"][i]["name"]}`).val('1шт');
        }
    });
});