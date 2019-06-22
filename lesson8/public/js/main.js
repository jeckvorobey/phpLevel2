window.onload = () => {
    const urlMoreCatalog = '../public/index.php?path=catalog/moreGoods/';

    const moreBtn = document.querySelector('#more-btn');
    moreBtn.addEventListener('click', (e) => {
        e.preventDefault();
        const goods = document.querySelectorAll('.product');
        let lastGood = goods[goods.length - 1];
        //console.log(+lastGood.dataset.id); //6
        moreGoods(lastGood.dataset.id);
    })



    moreGoods = async id => {
        try {
            const url = urlMoreCatalog + id + '&a'; //../public/index.php?path=catalog/moreGoods/6
            const response = await fetch(url);
            const data = await response.json();
            renderProduct(data.content_data.data);

        } catch {
            err => {
                console.log('Ошибка: ' + err);
            }
        };

    }

    renderProduct = dataArr => {
        const catalog = document.querySelectorAll('.catalog');
        dataArr.forEach(elem => {
            let product = document.createElement('div');
            product.className = 'product';
            product.dataset['id'] = elem.id_good;
            product.innerHTML += `<p><strong>ID товара: </strong>${elem.id_good}</p>`;
            product.innerHTML += `<p><strong>Наименование: </strong>${elem.name}</p>`;
            product.innerHTML += `<p><strong>Цена: </strong>${elem.price}</p>`;
            product.innerHTML += `<button class="btn-buy" value="${elem.id_good}">В корзину</button>`;
            // catalog.appendChild(product);
            console.dir(catalog);

        });
    }

}