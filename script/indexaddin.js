var cart = { "prod": [] };

$(document).on('click', function () {
    if (event.target.classList.contains('plus_btn')) {
        plusf(event.target.dataset.id, event.target.dataset.indexNumber);
    }
    if (event.target.classList.contains('minus_btn')) {
        minusf(event.target.dataset.id, event.target.dataset.indexNumber);
    }
    if (event.target.classList.contains('prod_but')) {
        addin(event.target.dataset.id, event.target.dataset.indexNumber);
    }
});

function plusf(dataid, ind) {
    var c = $(`input[data-id=${dataid}`).val();
    c = parseInt(c);
    if (ind == 0) {
        c += 100;
        $(`input[data-id=${dataid}`).val(`${c}гр`);
    }
    else {
        c++;
        $(`input[data-id=${dataid}`).val(`${c}шт`);
    }
}

function minusf(dataid, ind) {
    var c = $(`input[data-id=${dataid}`).val();
    c = parseInt(c);
    if (ind == 0) {
        if (c > 100) {
            c -= 100;
        }
        else c = 0;
        $(`input[data-id=${dataid}`).val(`${c}гр`);
    }
    else {
        if (c > 1) {
            c -= 1;
        }
        else c = 0;
        $(`input[data-id=${dataid}`).val(`${c}шт`);
    }
}

function addin(dataid, ind) {
    if (localStorage.getItem('cart') !== null) cart = JSON.parse(localStorage.getItem("cart"));
    var c = parseInt($(`input[data-id=${dataid}`).val());
    if(ind == 0){
        c=parseInt(c/100);
        c*=100;
    }
    var t = true;
    var i = 0;
    while (t) {
        if (cart["prod"][i]) {
            if (cart["prod"][i][0] == dataid) {
                if (c == 0) {
                    delete cart["prod"][i];
                    t = false;
                }
                else {
                    cart["prod"][i][1] = c;
                    t = false;
                }
            }

        }
        else {
            if (c == 0) {
                delete cart["prod"][i];
                t = false;
            }
            else {
                cart["prod"][i] = [dataid, c];
                t = false;
            }
        }
        i++;
    }
    localStorage.setItem("cart", JSON.stringify(cart));
    $(location).attr('href','catalog.php');
}