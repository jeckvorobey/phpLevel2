<?php

include '../models/Db.class.php';

$db = new Db();
$sql = 'SELECT * FROM `Picture`';
$images = $db->query($sql);

//print_r($images);
echo $images;
