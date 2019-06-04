$(document).ready(() => {
    $('.more-btn').click(e => {
        e.preventDefault();
        let lastId = $('.product').last().data('id');
        moreView(lastId);
    });
});

moreView = (lastId) => {
    $.ajax({
        type: 'POST',
        url: '../controllers/goods.php',
        data: {
            id: lastId
        },
        dataType: 'json',
        error: (text, error) => {
            alert(`Ошибка: ${text} | ${error}`);
        },
        success: data => {
            //console.log(data);
            for (const good of data) {
                let product = $('<div/>', {
                    class: 'product',
                    'data-id': good.id
                });
                let img = $('<img src="https://via.placeholder.com/250x150.png" alt="picture">');
                let content = $('<div/>', {
                    class: 'content'
                });
                let title = $('<h4/>', {
                    text: good.name
                });
                let description = $('<p/>', {
                    class: 'description',
                    text: good.description
                });
                let price = $('<p/>', {
                    class: 'price',
                    text: good.price + ' руб.'
                });
                let btn = $('<button/>', {
                    class: 'buy',
                    type: 'button',
                    value: good.id,
                    text: 'В корзину'
                });
                img.appendTo(product);
                title.appendTo(content);
                description.appendTo(content);
                price.appendTo(content);
                btn.appendTo(content);
                content.appendTo(product);
                $('.product-catalog').append(product);

            }
        }
    });

}