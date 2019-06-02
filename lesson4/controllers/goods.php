<?php

include '../models/Goods.class.php';

$goods = new Goods();
$firstGoods = $goods->getGoods();

if (isset($_POST['id'])) {
    $id = (int) $_POST['id'];
    $moreGoods = $goods->moreGoods($id);
    echo $data = json_encode($moreGoods);
}