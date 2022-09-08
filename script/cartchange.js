var cart = { "prod": [] };

$(document).on('click', function () {
    if (event.target.classList.contains('plus_btn')) {
        plusf(event.target.dataset.id, event.target.dataset.indexNumber);
    }
    if (event.target.classList.contains('minus_btn')) {
        minusf(event.target.dataset.id, event.target.dataset.indexNumber);
    }
    if (event.target.classList.contains('del_but')) {
        delprod(event.target.dataset.id);
    }
});

function plusf(dataid, ind) {
    cart = JSON.parse(localStorage.getItem("cart"));
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
    i = 0;
    var b = true;
    while (b) {
        if (cart["prod"][i][0] == dataid) b = false;
        else i++;
    }
    cart["prod"][i][1] = c;
    localStorage.setItem("cart", JSON.stringify(cart));
}

function minusf(dataid, ind) {
    cart = JSON.parse(localStorage.getItem("cart"));
    var c = $(`input[data-id=${dataid}`).val();
    c = parseInt(c);
    var del = false;
    if (ind == 0) {
        if (c > 100) {
            c -= 100;
        }
        else {
            del = true;
            c = 0;
        }
        $(`input[data-id=${dataid}`).val(`${c}гр`);
    }
    else {
        if (c > 1) {
            c -= 1;
        }
        else {
            del = true;
            c = 0;
        }
        $(`input[data-id=${dataid}`).val(`${c}шт`);
    }
    i = 0;
    var b = true;
    while (b) {
        if (cart["prod"][i][0] == dataid) b = false;
        else i++;
    }
    cart["prod"][i][1] = c;
    if (del) {
        delete cart["prod"][i];
    }
    localStorage.setItem("cart", JSON.stringify(cart));
    load();
}

function delprod(dataid) {
    cart = JSON.parse(localStorage.getItem("cart"));
    i = 0;
    var b = true;
    while (b) {
        if (cart["prod"][i]) {
            if (cart["prod"][i][0] == dataid) b = false;
        }
        i++;
    }
    i--;
    delete cart["prod"][i];
    localStorage.setItem("cart", JSON.stringify(cart));
    load();
}