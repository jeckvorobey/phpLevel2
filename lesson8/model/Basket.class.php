<?php

class Basket extends Model
{
    protected $count = 1;
    protected $is_in_order = 0;
    protected $id_order = null;

    public function addBasket($id_good, $id_user)
    {
        db::getInstance()->Query('INSERT INTO `basket`(`id_user`, `id_good`, `count`, `is_in_order`) VALUES (:id_user, :id_good,'.$this->count.','.$this->is_in_order.')', ['id_user' => $id_user, 'id_good' => $id_good]);

        return true;
    }

    public function basket_all($userId)
    {
        return db::getInstance()->Select(
            'SELECT basket.id_user, basket.id_good, basket.count, goods.name, goods.price, basket.count*goods.price AS amount  FROM `basket`  INNER JOIN `goods` on basket.id_good = goods.id_good WHERE basket.id_user = :userId AND basket.is_in_order = 0',
            ['userId' => $userId]);
    }
}