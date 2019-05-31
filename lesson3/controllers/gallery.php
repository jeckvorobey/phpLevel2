<?php

include 'models/Db.class.php';

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
//print_r($data);
