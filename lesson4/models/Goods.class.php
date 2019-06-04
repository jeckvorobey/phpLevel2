<?php

include_once '../models/Db.class.php';
try {
    class Goods
    {
        private $goods = [];
        private $db;

        public function __construct()
        {
            $this->db = new Db();
            $this->init();
        }

        public function getGoods()
        {
            return $this->goods;
        }

        private function init()
        {
            $sql = 'SELECT `id`, `name`, `description`, `price` FROM `goods` LIMIT 6';
            $this->goods = $this->db->query($sql);

            return $this->goods;
        }

        public function moreGoods($lastItem)
        {
            $lastItem = (int) $lastItem;
            $sql = 'SELECT `id`, `name`, `description`, `price` FROM `goods` LIMIT '.$lastItem.',6';
            $more = $this->db->query($sql);

            return $more;
        }
    }
} catch (Exception $e) {
    echo 'Ошибка: ',  $e->getMessage(), "\n";
}