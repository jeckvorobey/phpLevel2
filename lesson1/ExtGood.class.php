<?php

include 'Good.class.php';
class ExtGood extends Good
{
    private $isbn;
    private $anotation;

    public function __construct($author, $title, $price, $isbn, $anotation)
    {
        parent::__construct($author, $title, $price);
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

    public function init()
    {
        echo '<div class="product" style="margin:20px">';
        echo '<div class="author"><strong>Автор книги:</strong> '.$this->getAuthor().' </div>';
        echo '<div class="title"><strong>Название:</strong> '.$this->getTitle().' </div>';
        echo '<div class="title"><strong>ISBN:</strong> '.$this->isbn.' </div>';
        echo '<div class="title"><strong>Анотация к книге:</strong> '.$this->anotation.' </div>';
        echo '<div class="price"><strong>Стоимость:</strong> '.$this->getPrice().' руб. </div>';
        echo '</div>';
    }
}