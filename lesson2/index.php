<?php

//include 'Weight.class.php';
//include 'Piece.class.php';
include 'Digital.class.php';
//Весовой товар
//$weightGood = new WeightGood('Рис', 'Рис пропаренный весовой', 30, 0.5, 75);
//$weightGood->render();

//Штучный физический товар
$pieceGood = new PieceGood('Книга', 'В бумажном переплете', 25, 3, 250);
$pieceGood->render();

//цифровой товар
$digitalGood = new DigitalGood('Цифровая книга', 'В формате FB2', 20, 3);
$digitalGood->render();