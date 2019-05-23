<?php

class Good
{
    private $author;
    private $ttile;
    private $prise;

    public function __construct($author, $title, $price)
    {
        $this->setAuthor($author);
        $this->setTitle($title);
        $this->setPrice($price);
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function init()
    {
        echo '<div class="product">';
        echo '<div class="author">Автор книги: '.$this->author.' </div>';
        echo '<div class="title">Название: '.$this->title.' </div>';
        echo '<div class="price">Стоимость: '.$this->price.' руб. </div>';
        echo '</div>';
    }
}