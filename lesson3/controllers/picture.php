<?php

include 'models/Db.class.php';
try {
    $db = new Db();
    $sql = 'SELECT * FROM `Picture` WHERE id='.$id;
    $result = $db->query($sql);
    //print_r($result);
    $data = [];
    if ($result) {
        $data['image'] = [
            'src' => $result[0]['src_big'],
            'name' => $result[0]['name'],
        ];
    }

    // print_r($data);
} catch (Exception $e) {
    die('ERROR: '.$e->get_message());
}