<?php

session_start();
class OrderController extends Controller
{
    public $view = 'order';
    public $title;
    public $basket;
    private $id_user;
    private $data = [];
    public $errors = [];
    private $isDone = false;

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

        $this->basket = Basket::basket_all($this->id_user);
        $totalCount = array_sum(array_column($this->basket, 'count'));
        $totalAmount = array_sum(array_column($this->basket, 'amount'));
        $delivery = Order::delivery();
        if (!empty($_POST)) {
            $this->done();
        }
        if (empty($this->errors)) {
            // print_r($this->errors);
            return ['data' => $basket, 'totalCount' => $totalCount, 'totalAmount' => $totalAmount, 'delivery' => $delivery];
            exit;
        }
        //  print_r($this->errors);

        return ['data' => $basket, 'totalCount' => $totalCount, 'totalAmount' => $totalAmount, 'delivery' => $delivery, 'err' => $this->errors[0]];
    }

    public function done()
    {
        $this->data = $_POST;
        /*
        * проверки на пустые поля формы
        */
        if ($this->data['delivery'] > '1') {
            if (empty($this->data['name']) || empty($this->data['tel']) || empty($this->data['email']) || empty($this->data['adress'])) {
                $this->errors[] = 'Заполните все поля формы';
            }
        }
        if (empty($this->errors)) {
            print_r($this->data);
            print_r($this->basket);
            $addOrder = Order::addOrder($this->id_user, 1);
            if (!$addOrder) {
                die('Ошибка довавления ордера');
            }
            $idOrder = Order::getIdOrder($this->id_user, 1);
            foreach ($this->basket as $key => $val) {
                Order::addOrderGoods($idOrder['id_order'], $this->basket[$key]['id_good'], $this->basket[$key]['count']);
            }
            Basket::delBasket($this->id_user);
        }
    }
}