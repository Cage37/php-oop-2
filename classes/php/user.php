<?php

class User {
    public $name;
    protected $mail;
    protected $city;
    public $orders;
    
    function __construct(string $name, string $mail, string $city, array $orders = [])
    {
        $this->name = $name;
        $this->desc = $mail;
        $this->price = $city;
        $this->orders = $orders;
    }

    public function setOrder($order) {
        $this->orders[] = $order;
    }

    public function getOrder() {
        return $this->orders;
    }
}

?>