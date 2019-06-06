<?php

abstract class Base
{
    abstract protected function before();

    abstract protected function render();

    protected function request($action)
    {
        $this->before;
        $this->$action;
        $this->render;
    }
}
