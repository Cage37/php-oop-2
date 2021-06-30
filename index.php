<?php

require __DIR__ . '/classes/php/product.php';
require __DIR__ . '/classes/php/user.php';
require __DIR__ . '/classes/php/userpremium.php';
require __DIR__ . '/classes/php/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>PHP-OOP-2</title>
</head>
<body>

    <header>
        <h1>MY SHOP - USERS OR PREMIUM USERS?</h1>
    </header>

    <main>
        <div class="maincontainer">
            <div class="leftmain">
            <?php foreach ($users as $user) : ?>
                <div class="usercard">
                    <p><span>Username: </span> <?= $user -> name; ?></p>
                    
                    <span>Ordered: </span> <p>
                        <?php $usersorders = $user -> orders; 
                        foreach($usersorders as $userorder) {
                            $name=$userorder->name;
                            $price=$userorder->price; ?>
                            <span>Nome prodotto: </span> <?= $name ?><br>
                            <span>Prezzo prodotto: </span><?= $price ?>
                        <?php } ?>
                    </p>
                </div>
            <?php endforeach; ?>
            </div>

            <div class="rightmain">
            <?php foreach ($usersPremium as $user) : ?>
                    <div class="usercardpremium">
                     <p><span>Username: </span> 
                        <?= $user -> name; ?>
                    </p>
                    <span>Ordered: </span> <p>
                        <?php $usersorders = $user -> orders; 
                        foreach($usersorders as $userorder) {
                            $name=$userorder->name;
                            $price=$userorder->price; ?>
                            <span>Nome prodotto: </span> <?= $name ?><br>
                            <span>Prezzo prodotto: </span> <?= $price ?>
                        <?php } ?>
                    </p>
                    <p><span>Premium level: </span> 
                        <?= $user -> level; ?>
                    </p>
            </div>
            <?php endforeach; ?>  
            </div>              
        </div>
    </main> 


    
</body>
</html>