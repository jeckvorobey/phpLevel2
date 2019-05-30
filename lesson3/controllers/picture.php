<?php

include '../models/Db.class.php';
try {
    $db = new Db();
    $sql = 'SELECT * FROM `Picture` WHERE id='.$id;
    $data = $db->query($sql);
    //print_r($data);
} catch (Exception $e) {
    die('ERROR: '.$e->get_message());
}
//print_r($data);