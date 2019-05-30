<?php

include '../models/Db.class.php';

$db = new Db();
$sql = 'SELECT * FROM `Picture`';
$data = $db->query($sql);

//print_r($data);
