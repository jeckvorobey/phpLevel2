<?php

session_start();
class BasketController extends Controller
{
    public $view = 'basket';
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
        $this->title .= ' | Корзина';

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

    /**
     * метод добавления товаро в корзину.
     */
    public function addBasket($id_good)
    {
        $goodRow = Basket::getBasketRow($id_good, $this->id_user);
        if ($goodRow > 0) {
            $data = Basket::updateCount($id_good, $this->id_user);
        } else {
            $data = Basket::addBasket($id_good, $this->id_user);
        }

        return ['data' => $data];
    }

    public function delBasket($id_good)
    {
        $data = Basket::delGood($id_good, $this->id_user);

        return ['data' => $data];
    }

    public function minusGood($id_good)
    {
        $str = Basket::minusCount($id_good, $this->id_user);
        $data = Basket::count($id_good, $this->id_user);
        if ($data['count'] == 0) {
            $data = Basket::delGood($id_good, $this->id_user);
        }
        $basket = Basket::basket_all($this->id_user);
        $totalCount = array_sum(array_column($basket, 'count'));
        $totalAmount = array_sum(array_column($basket, 'amount'));

        return ['data' => $data, 'totalCount' => $totalCount, 'totalAmount' => $totalAmount];
        //return ['data' => $data];
    }

    public function plusGood($id_good)
    {
        Basket::updateCount($id_good, $this->id_user);
        $data = Basket::count($id_good, $this->id_user);
        $basket = Basket::basket_all($this->id_user);
        $totalCount = array_sum(array_column($basket, 'count'));
        $totalAmount = array_sum(array_column($basket, 'amount'));

        return ['data' => $data, 'totalCount' => $totalCount, 'totalAmount' => $totalAmount];
        // return ['data' => $data];
    }
}