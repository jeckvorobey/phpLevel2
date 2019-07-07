window.onload = () => {
    let delBasket = document.querySelectorAll('.rm-good');
    let minusGood = document.querySelectorAll('.minus');
    let plusGood = document.querySelectorAll('.plus');
    const checkout = document.querySelector('.checkout');


    if (checkout !== null) {
        checkout.addEventListener('click', e => {
            e.preventDefault();
            window.location.href = '../public/index.php?path=order';
        });
    }

    [].forEach.call(minusGood, item => {
        item.addEventListener('click', e => {
            e.preventDefault();
            changesCount(e.target.dataset.id_good, e.target.value)
            //console.log(e.target.dataset.id_good, e.target.value);
        });
    });

    [].forEach.call(plusGood, item => {
        item.addEventListener('click', e => {
            e.preventDefault();
            changesCount(e.target.dataset.id_good, e.target.value)
            //console.log(e.target.dataset.id_good, e.target.value);
        });
    });

    [].forEach.call(delBasket, item => {
        item.addEventListener('click', e => {
            e.preventDefault();
            delBasket(e.target.value);
            //console.log(+(e.target.value));
        });
    });

    delBasket = async id => {
        try {
            const url = `../public/index.php?path=basket/delBasket/${id}&a`;
            const response = await fetch(url);
            const data = await response.json();
            if (data.content_data.data === 1) {
                location.reload();
            }
        } catch {
            err => {
                console.log('Ошибка: ' + err);
            }
        };

    }

    changesCount = async (id, val) => {
        if (val === '-') {
            const url = `../public/index.php?path=basket/minusGood/${id}&a`;
            const response = await fetch(url);
            const data = await response.json();
            if (data.content_data.data === 1) {
                location.reload();
            }
            render(id, data.content_data.data.summa, data.content_data.data.count, data.content_data.totalAmount, data.content_data.totalCount);
        }
        if (val === '+') {
            const url = `../public/index.php?path=basket/plusGood/${id}&a`;
            const response = await fetch(url);
            const data = await response.json();
            render(id, data.content_data.data.summa, data.content_data.data.count, data.content_data.totalAmount, data.content_data.totalCount);
            // console.log(data.content_data);
        }
    }
    render = (id, valSum, valCount, totalAmount, totalCount) => {
        document.querySelector(`[data-quantity="${id}"]`).textContent = valCount;
        document.querySelector(`[data-sum="${id}"]`).textContent = valSum;
        document.querySelector('.total-count').textContent = totalCount + ' шт.';
        document.querySelector('.total-sum').textContent = totalAmount + ' руб.';
    }
}