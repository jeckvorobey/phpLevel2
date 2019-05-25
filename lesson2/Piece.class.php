<?php

include 'Good.class.php';

class PieceGood extends Good
{
    private $count;
    private $price;

    public function __construct($name, $description, $costPrice, $count, $price)
    {
        parent::__construct($name, $description, $costPrice);
        $this->setCount($count);
        $this->setPrice($price);
    }

    public function setCount($count)
    {
       return $this->count = $count;
    }

    public function getCount()
    {
       return $this->count;
    }

    public function setPrice($price)
    {
       return $this->price = $price;
    }

    public function getPrice()
    {
       return $this->price;
    }

    public function price()
    {
        return $this->price * $this->count;
    }

    public function income()
    {
        return $this->price() - $this->getCostPrice() * $this->count;
    }

    public function render()
    {
        echo '<div class="product">';
        echo '<p class="name"> <strong>Наименование товара:</strong> '.$this->getName().'</p>';
        echo '<p class="description"><strong> Описание товара:</strong> '.$this->getDescription().'</p>';
        echo '<p class="price"><strong>Стоимость товара за 1 штуку:</strong> '.$this->price.' руб.</p>';
        echo '<p class="weight"><strong>Количество товара:</strong> '.$this->count.' шт.</p>';
        echo '<p class="totalPrice"><strong>Цена:</strong> '.$this->price().' руб.</p>';
        echo '<p class="income"><strong>Доход с товара:</strong> '.$this->income().' руб.</p>';
        echo '</div>';
    }
}