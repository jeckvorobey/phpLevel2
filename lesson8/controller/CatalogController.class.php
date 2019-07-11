<?php

class CatalogController extends Controller
{
    public $view = 'catalog';
    public $title;

    public function index()
    {
        $this->title .= ' | Каталог';
        $catalog = Good::getGoodsAll();

        return ['data' => $catalog];
    }

    public function moreGoods($lastId)
    {
        $catalog = Good::getGoodsAll($lastId);

        return ['data' => $catalog];
    }
}