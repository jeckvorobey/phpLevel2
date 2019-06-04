<?php

include '../models/Db.class.php';
try {
    $db = new Db();
    $sql = 'SELECT * FROM `Picture`';
    $result = $db->query($sql);
    $data = [];
    if ($result) {
        foreach ($result as $item) {
            $data['images'][] = [
            'id' => $item['id'],
            'src' => $item['src_small'],
            'name' => $item['name'],
        ];
        }
    }
    unset($db);
} catch (Extension $e) {
    die('Error: '.$e->get_message());
}
//print_r($data);