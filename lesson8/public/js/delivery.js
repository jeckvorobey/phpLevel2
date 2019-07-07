window.onload = () => {
    const totalSum = +(document.querySelector('.total').textContent);
    const delivery = document.querySelector('.delivery');
    delivery.addEventListener('change', e => {
        e.preventDefault();
        renderForm(e.target.value);
        total(e.target.value);
    })

    /**
     * отрисовка формы в зависимости от выбранного способа доставки
     */
    renderForm = delivery_id => {
        let form = document.querySelector('.delivery-form');
        let btn = document.querySelector('.done');
        const formElem = document.querySelector('.form-elem');
        if (+(delivery_id) !== 0) {
            if (!formElem) {
                let formElem = document.createElement('div');
                formElem.className = 'form-elem';
                formElem.innerHTML = '<lable for="name">Ф.И.О</lable><br> <input type="text" name="name"><br><br> <lable for="tel">Телефон</lable><br> <input type="tel" name="tel"><br><br> <lable for="email" >E-mail</input><br> <input type="email" name="email"><br><br> <label for="adress">Адрес доставки</label><br> <textarea name="adress" cols="30" rows="5"></textarea><br><br>';
                form.insertBefore(formElem, btn);
            }
        } else {
            formElem.remove();
        }
    }
    /**
     * расчет стоимоти доставки и окончательной цены
     */
    total = delivery_price => {
        let del_price = document.querySelector('.delivery-price').textContent = delivery_price + ' руб.';
        let total = document.querySelector('.total').textContent = totalSum + +(delivery_price);
        // console.log(totalSum, +(delivery_price));

    }

}