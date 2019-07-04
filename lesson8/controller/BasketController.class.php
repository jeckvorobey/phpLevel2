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
        print_r($basket);
        if (!empty($basket)) {
            return ['data' => $basket];
        } else {
            return ['data' => 0];
        }
    }

    public function addBasket()
    {
        if (isset($_POST['idGood'])) {
            $good = Good::getGoodInfo($_POST['idGood']);
            Basket::setIdGood($good['id_good']);
            Basket::setCount($_POST['quantity']);
            Basket::setUser($this->id_user);
            $data = Basket::save();
            echo json_encode($data);
        }
    }
}