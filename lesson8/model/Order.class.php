<?php

class Order extends Model
{
    public function delivery()
    {
        return db::getInstance()->Select('SELECT * FROM `delivery` WHERE 1');
    }
}
