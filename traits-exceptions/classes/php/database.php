<?php

$products = [
    new Product("iPhone", "Smartphone", 799, 150),
    new Product("MacBook", "Computer", 1499, 60),
    new Product("Apple Watch", "Orologio", 599, 220),
    new Product("iPad", "Tablet", 1099, 100),
    new Product("AirPods", "Auricolari", 299, 450)
];

$users = [
    new User ("Paolo", "paoloxyzgmail.com", "Verona"),
    new User ("Riccardo", "ricky123@gmail.com", "Torino"),
    new User ("Giacomo", "jacklosquarta@gmail.com", "Milano"),
];

$usersPremium = [
    new UserPremium("Simone", "simo@gmail.com", "Roma", 3),
    new UserPremium("Sara", "sixty@gmail.com", "Bolzano", 1),
    new UserPremium("Beatrice", "beaxgmail.com", "Napoli", 2)
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