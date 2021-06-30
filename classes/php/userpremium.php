<?php

class UserPremium extends User {
    public $level;

    function __construct(string $name,string $mail,string $city, float $level)
    {
        parent::__construct($name, $mail, $city);
        $this->level = $level;
    }

    public function setOrder($order) {
        $order = clone $order;
        
        if ($this->level == 3) {
            $order->price -= $order->price * 0.3;
        } else if ($this->level == 2) {
            $order->price -= $order->price * 0.2;
        } else {
            $order->price -= $order->price * 0.1;
        }
        
        $this->orders[] = $order;
    }

    public function getOrder() {
        return $this->orders;
    }

}

?>