<?php

include 'Good.class.php';
class ExtGood extends Good
{
    private $isbn;
    private $anotation;

    public function __construct($author, $title, $price, $isbn, $anotation)
    {
        parent:: __construct($author, $title, $price);
        $this->setIsbn($isbn);
        $this->setAnotation($anotation);
    }

    public function getIsbn()
    {
        return $this->isbn;
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    public function getAnotation()
    {
        return $this->anotation;
    }

    public function setAnotation($anotation)
    {
        $this->anotation = $anotation;
    }

    /*public function init()
    {
        echo '<div class="product">';
        echo '<div class="author">Автор книги: '.$this->author.' </div>';
        echo '<div class="title">Название: '.$this->title.' </div>';
        echo '<div class="title">ISBN: '.$this->isbn.' </div>';
        echo '<div class="title">Анотация к книге: '.$this->anotation.' </div>';
        echo '<div class="price">Стоимость: '.$this->price.' руб. </div>';
        echo '</div>';
    }*/
}