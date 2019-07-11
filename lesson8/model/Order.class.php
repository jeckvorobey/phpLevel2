<?php

class Order extends Model
{
    /**
     * получаем возможные способы доставки.
     */
    public function delivery()
    {
        return db::getInstance()->Select('SELECT * FROM `delivery` WHERE 1');
    }

    /**
     * Добавляем данные в таблицу Ордер
     */
    public function addOrder($id_user, $id_status = 1)
    {
        return db::getInstance()->Request('INSERT INTO `order`(`id_user`, `id_order_status`) VALUES (:id_user, :id_status)', ['id_user' => $id_user, 'id_status' => $id_status]);
    }

    /**
     * получаем id ордера.
     */
    public function getIdOrder($id_user, $id_status = 1)
    {
        return db::getInstance()->SelectOne('SELECT `id_order` FROM `order` WHERE id_user = :id_user AND id_order_status = :id_status', ['id_user' => $id_status, 'id_status' => $id_status]);
    }

    /**
     * добавляем данные о товарах в ордере.
     */
    public function addOrderGoods($id_order, $id_good, $count)
    {
        return db::getInstance()->Request('INSERT INTO `order_goods`(`id_order`, `id_good`, `count`) VALUES (:id_order, :id_good, :count)', ['id_order' => $id_order, 'id_good' => $id_good, 'count' => $count]);
    }
}