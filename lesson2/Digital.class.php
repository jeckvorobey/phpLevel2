<?php

include 'Piece.class.php';

class DigitalGood extends PieceGood
{
    public function __construct($name, $description, $costPrice, $count, $price)
    {
        parent::__construct($name, $description, $costPrice, $count, $price);
    }
}