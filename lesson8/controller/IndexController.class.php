<?php

class IndexController extends Controller
{
    public $view = 'index';
    public $title;

    public function __construct()
    {
        parent::__construct();
        $this->title .= ' | Главная';
    }

    public function index()
    {
        return 'test';
    }

    public function authError()
    {
        return ['data' => true];
    }

    public function nowUser()
    {
        return ['data' => true];
    }
}