<?php

abstract class Good
{
    private $description;
    private $name;
    private $costPrice;

    public function __construct($name, $description, $costPrice)
    {
        $this->setName($name);
        $this->setDescription($description);
        $this->setCostPrice($costPrice);
    }

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setDescription($description)
    {
        return $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setCostPrice($costPrice)
    {
        return $this->costPrice = $costPrice;
    }

    public function getCostPrice()
    {
        return $this->costPrice;
    }

    abstract public function price();

    abstract public function income();
}