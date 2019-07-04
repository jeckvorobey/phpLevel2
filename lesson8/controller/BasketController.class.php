<?php

session_start();
class BasketController extends Controller
{
    public $view = 'basket';
    public $title;
    private $id_user;

    public function index()
    {
        $this->title .= ' | Корзина';

        if (isset($_SESSION['user'])) {
            $dataUser = $_SESSION['user'];
            $this->id_user = $dataUser[0]['id_user'];
        } else {
            $this->id_user = session_id();
        }
        //$this->id_user = 5;
        $basket = Basket::basket_all($this->id_user);
        // print_r($basket);
        if (!empty($basket)) {
            $totalCount = array_sum(array_column($basket, 'count')); //получаем общее кол-во всех товаров в корзине
            $totalAmount = array_sum(array_column($basket, 'amount')); //получаем общую сумму всех товаров в корзине
            return ['data' => $basket, 'totalCount' => $totalCount, 'totalAmount' => $totalAmount];
        } else {
            return ['data' => 0];
        }
    }

    public function addBasket($id_good)
    {
        $data = Basket::addBasket($id_good, $this->id_user);

        return ['data' => $data];
    }
}