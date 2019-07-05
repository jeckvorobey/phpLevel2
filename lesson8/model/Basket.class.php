<?php

class Basket extends Model
{
    /**
     * добавляем товар в корзину.
     */
    public function addBasket($id_good, $id_user)
    {
        return db::getInstance()->Request('INSERT INTO `basket`(`id_user`, `id_good`, `count`) VALUES (:id_user, :id_good, 1)', ['id_user' => $id_user, 'id_good' => $id_good]);
    }

    /**
     * получаем все товары из корзины.
     */
    public function basket_all($userId)
    {
        return db::getInstance()->Select(
            'SELECT basket.id_user, basket.id_good, basket.count, goods.name, goods.price, basket.count*goods.price AS amount  FROM `basket`  INNER JOIN `goods` on basket.id_good = goods.id_good WHERE basket.id_user = :userId',
            ['userId' => $userId]);
    }

    /**
     * выборка из корзины по id_user и id_good.
     */
    public function getBasketRow($id_good, $id_user)
    {
        return db::getInstance()->Request(
            'SELECT id_user, id_good FROM basket WHERE id_user = :id_user AND id_good = :id_good',
            ['id_user' => $id_user, 'id_good' => $id_good]
        );
    }

    /**
     * Увеличиваем количество товара на 1.
     */
    public function updateCount($id_good, $id_user)
    {
        return db::getInstance()->Request(
            'UPDATE `basket` SET `count`=count+1 WHERE id_user = :id_user AND id_good = :id_good',
            ['id_user' => $id_user, 'id_good' => $id_good]
        );
    }

    /**
     * Уменьшаем количество товаров на 1.
     */
    public function minusCount($id_good, $id_user)
    {
        return db::getInstance()->Request(
            'UPDATE `basket` SET `count`=count-1 WHERE id_user = :id_user AND id_good = :id_good',
            ['id_user' => $id_user, 'id_good' => $id_good]
        );
    }

    /**
     * Удаляем товар из корзины.
     */
    public function delGood($id_good, $id_user)
    {
        return db::getInstance()->Request(
            'DELETE FROM `basket` WHERE id_user = :id_user AND id_good = :id_good',
            ['id_user' => $id_user, 'id_good' => $id_good]
        );
    }

    /**
     * полчаем количество товара  и сумму по его id и id пользователя.
     */
    public function count($id_good, $id_user)
    {
        return db::getInstance()->SelectOne(
            'SELECT basket.count, basket.count*goods.price AS summa FROM basket INNER JOIN goods ON basket.id_good = goods.id_good WHERE basket.id_user = :id_user AND basket.id_good = :id_good',
            ['id_user' => $id_user, 'id_good' => $id_good]
        );
    }
}
