<?php

include 'Weight.class.php';
//include 'Piece.class.php';

//Весовой товар
$weightGood = new WeightGood('Рис', 'Рис пропаренный весовой', 30, 0.5, 75);
$weightGood->render();

//Штучный физический товар
//$pieceGood = new PieceGood('Книга', 'В бумажном переплете', 25, 3, 250);
//$pieceGood->render();