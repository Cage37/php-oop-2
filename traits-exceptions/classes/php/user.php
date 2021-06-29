<?php

class User {

    use AddName;
    
    public $mail;
    protected $city;
    public $orders;
    
    function __construct(string $name, string $mail, string $city, array $orders = [])
    {
        $this->name = $name;
        $this->mail = $mail;
        $this->city = $city;
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