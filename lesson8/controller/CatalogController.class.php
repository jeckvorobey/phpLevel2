<?php

class CatalogController extends Controller
{
    public $view = 'catalog';
    public $title;

    public function render()
    {
        $catalog = Good::getGoodsAll();
        //print_r($catalog);
        return ['data' => $catalog];
    }
}