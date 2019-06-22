<?php

class Basket extends Model
{
    protected $id_user = null;
    protected $id_good;
    protected $price = 0;
    protected $count = 1;
    protected $is_in_order = 0;
    protected $id_order = null;

    public function __construct(array $values = [])
    {
        parent::__construct($values);
    }

    public function setUser($id_user)
    {
        $this->id_user = $id_user;
    }

    /**
     * @param mixed $id_good
     */
    public function setIdGood($id_good)
    {
        $this->id_good = $id_good;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @param int $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * @param int $is_in_order
     */
    public function setIsInOrder($is_in_order)
    {
        $this->is_in_order = $is_in_order;
    }

    /**
     * @param mixed $id_order
     */
    public function setIdOrder($id_order)
    {
        $this->id_order = $id_order;
    }

    public function save()
    {
        $query = 'INSERT INTO basket(id_user, id_good, price, is_in_order) VALUES 
                  (
                    '.(($this->id_user) == null ? 'NULL' : $this->id_user).',
                    '.$this->id_good.',
                    '.$this->price.',
                    '.$this->count.',
                    '.$this->is_in_order.'
                  )';
        db::getInstance()->Query($query);

        return true;
    }

    public function basket_all($userId)
    {
        return db::getInstance()->Select(
            'SELECT basket.id_user, basket.count, goods.name, goods.price  FROM `basket`  INNER JOIN `goods` on basket.id_good = goods.id_good WHERE basket.id_user = :userId AND basket.is_in_order = 0',
            ['userId' => $userId]);
    }
}