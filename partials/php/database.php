<?php

class Product {
    public $name;
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


$products = [
    new Product("iPhone", "Smartphone", 799, 150),
    new Product("MacBook", "Computer", 1499, 60),
    new Product("Apple Watch", "Orologio", 599, 220),
    new Product("iPad", "Tablet", 1099, 100),
    new Product("AirPods", "Auricolari", 299, 450)
];

$users = [
    new User ("Paolo", "paoloxyz@gmail.com", "Verona"),
    new User ("Riccardo", "ricky123@gmail.com", "Torino"),
    new User ("Giacomo", "jacklosquarta@gmail.com", "Milano"),
];

$usersPremium = [
    new UserPremium("Simone", "simo@gmail.com", "Roma", 3),
    new UserPremium("Sara", "sixty@gmail.com", "Bolzano", 1),
    new UserPremium("Beatrice", "beax@gmail.com", "Napoli", 2)
];

$users[0]->setOrder($products[1]);
$users[0]->getOrder();
$users[1]->setOrder($products[4]);
$users[1]->getOrder();
$users[2]->setOrder($products[0]);
$users[2]->getOrder();
$usersPremium[0]->setOrder($products[1]);
$usersPremium[0]->getOrder();
$usersPremium[1]->setOrder($products[4]);
$usersPremium[1]->getOrder();
$usersPremium[2]->setOrder($products[0]);
$usersPremium[2]->getOrder();

?>