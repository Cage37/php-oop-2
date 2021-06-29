<?php


class Product {

    use AddName;
    
    protected $desc;
    public $price;
    protected $qyt;
    
    function __construct(string $name,string $desc,float $price,float $qyt)
    {
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
        $this->qyt = $qyt;
    }
}

?>