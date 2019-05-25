<?php

include 'Good.class.php';

class WeightGood extends Good
{
    private $weight;
    private $priceFor1Kg;

    public function __construct($name, $description, $costPrice, $weight, $priceFor1Kg)
    {
        parent::__construct($name, $description, $costPrice);
        $this->setWeight($weight);
        $this->setPriceFor1Kg($priceFor1Kg);
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getWeight()
    {
        $this->weight;
    }

    public function setPriceFor1Kg($priceFor1Kg)
    {
        $this->priceFor1Kg = $priceFor1Kg;
    }

    public function getPriceFor1Kg()
    {
        $this->priceFor1Kg;
    }

    public function price()
    {
        return $this->weight * $this->priceFor1Kg;
    }

    public function income()
    {
        return $this->price() - $this->getCostPrice() * $this->weight;
    }

    public function render()
    {
        echo '<div class="product">';
        echo '<p class="name"> <strong>Наименование товара:</strong> '.$this->getName().'</p>';
        echo '<p class="description"><strong> Описание товара:</strong> '.$this->getDescription().'</p>';
        echo '<p class="price"><strong>Стоимость товара за килограмм:</strong> '.$this->priceFor1Kg.' руб.</p>';
        echo '<p class="weight"><strong>Вес товара:</strong> '.$this->weight.' кг.</p>';
        echo '<p class="totalPrice"><strong>Цена:</strong> '.$this->price().' руб.</p>';
        echo '<p class="income"><strong>Доход с товара:</strong> '.$this->income().' руб.</p>';
        echo '</div>';
    }
}