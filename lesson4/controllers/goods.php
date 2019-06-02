<?php

include '../models/Goods.class.php';

$goods = new Goods();
$firstGoods = $goods->getGoods();
