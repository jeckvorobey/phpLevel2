<?php

session_start();
class OrderController extends Controller
{
    public $view = 'order';
    public $title;
    private $id_user;

    public function __construct()
    {
        parent::__construct();
        if (isset($_SESSION['user'])) {
            $dataUser = $_SESSION['user'];
            $this->id_user = $dataUser[0]['id_user'];
        } else {
            $this->id_user = session_id();
        }
    }

    public function index()
    {
        $this->title .= ' | Оформление заказа';
        //print_r($this->id_user);
        $basket = Basket::basket_all($this->id_user);
        $totalCount = array_sum(array_column($basket, 'count'));
        $totalAmount = array_sum(array_column($basket, 'amount'));
        $delivery = Order::delivery();

        return ['data' => $basket, 'totalCount' => $totalCount, 'totalAmount' => $totalAmount, 'delivery' => $delivery];
    }
}