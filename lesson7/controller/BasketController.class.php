<?php

session_start();
class BasketController extends Controller
{
    public $view = 'basket';
    public $title;
    private $id_user;

    public function __construct()
    {
        $this->title .= ' | Корзина';
    }

    public function render()
    {
        if (isset($_SESSION['login']) && isset($_SESSION['pass'])) {
            $userId = $_SESSION['id'];
        } else {
            $userId = session_id();
        }
        $basket = Basket::basket_all($userId);
        if (!basket) {
            return ['data' => 0];
        } else {
            ['data' => $basket];
        }
    }

    public function addBasket()
    {
        if (isset($_POST['idGood'])) {
            $good = Good::getGoodInfo($_POST['idGood']);
            Basket::setIdGood($good['id_good']);
            Basket::setPrice($good['price']);
            Basket::setCount($_POST['quantity']);
            Basket::setUser($this->id_user);
            $data = Basket::save();
            echo json_encode($data);
        }
    }
}