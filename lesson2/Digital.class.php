<?php

include 'Piece.class.php';

class DigitalGood extends PieceGood
{
    public function __construct($name, $description, $costPrice, $count)
    {
        parent::__construct($name, $description, $costPrice, $count);
    }

    public function price()
    {
        return ($this->getPrice() / 2) * $this->getCount();
    }

    public function income()
    {
        return ($this->price() / 2) - ($this->getCostPrice() * $this->getCount());
    }

    public function render()
    {
        echo '<div class="product">';
        echo '<p class="name"> <strong>Наименование товара:</strong> '.$this->getName().'</p>';
        echo '<p class="description"><strong> Описание товара:</strong> '.$this->getDescription().'</p>';
        echo '<p class="price"><strong>Стоимость товара за 1 штуку:</strong> '.$this->price().' руб.</p>';
        echo '<p class="weight"><strong>Количество товара:</strong> '.$this->getCount().' шт.</p>';
        echo '<p class="totalPrice"><strong>Цена:</strong> '.$this->price().' руб.</p>';
        echo '<p class="income"><strong>Доход с товара:</strong> '.$this->income().' руб.</p>';
        echo '</div>';
    }
}
