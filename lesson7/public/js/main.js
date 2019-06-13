$(document).ready(function () {

    $('.btn-buy').click(e => {
        e.preventDefault();

        //console.log(e.target.value);

        $.ajax({
            url: "../controller/BasketController.class.php",
            type: "POST",
            data: {
                id_good: +(e.target.value),
                quantity: 1
            },
            error: function () {
                alert("Что-то пошло не так...");
            },
            success: function (answer) {
                alert("Товар добавлен в корзину!");
            },
            dataType: "json"
        })
    });
});