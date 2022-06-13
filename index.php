<?php
require_once __DIR__ . '/Classes/Premium.php';
require_once __DIR__ . '/Classes/CreditCard.php';
require_once __DIR__ . '/Classes/Product.php';

// ---- UTENTI STANDARD ----
$user1 = new User('Mario', 'Mario', 'itsamemario@gmail.com', 'Viale dei funhi, 4');
// var_dump($user1);

$user2 = new User('Luigi', 'Mario', 'luiiiigi@gmail.com', 'Viale dei funghi, 4');
// var_dump($user2);


// -----UTENTI PREMIUM-----
$premiumUser1 = new Premium('Lara', 'Croft', 'mscroft@gmail.com', 'Viale dei grandi meloni, 88');
// var_dump($premiumUser1);

$premiumUser2 = new Premium('Smith', 'John', 'johnny@gmail.com', 'Viale del nulla, 48');
// var_dump($premiumUser2);

// ----CARTE DI CREDITO----
$creditCard1 = new CreditCard('Visa', 123456789312, 111);
$creditCard1->setExpiration("2022-22-22");
// var_dump($creditCard1);

$creditCard2 = new CreditCard('MasterCard', 123546789662, 222);
$creditCard2->setExpiration("2022-22-22");
// var_dump($creditCard2);

$creditCard3 = new CreditCard('Postepay', 12345678555, 333);
$creditCard3->setExpiration("2022-22-22");
// var_dump($creditCard3);

$creditCard4 = new CreditCard('Curve', 123451219312, 444);
$creditCard4->setExpiration("2002-03-13");
// var_dump($creditCard4);

// ASSEGNAZIONE CARTE DI CREDITO
$user1->setCreditCard($creditCard1);
// var_dump($user1);

$user2->setCreditCard($creditCard2);
// var_dump($user2);

$premiumUser1->setCreditCard($creditCard3);
// var_dump($premiumUser1);

$premiumUser2->setCreditCard($creditCard4);
// var_dump($premiumUser2);

// ---- PRODOTTI ----
$product1 = new Product('Cibo', 'Secco', 'LeChat', 'Gatto', 6.66);

$product2 = new Product('Cibo', 'Secco', 'Royal Canin', 'Cane', 20.99);

$product3 = new Product('Cibo', 'Umido', 'GnamGnam', 'Cane', 30.00);

$product4 = new Product('Giochi', 'Tiragraffi', 'ScratchThis', 'Gatto', 50.00);

$product4 = new Product('Accessori', 'Collare', 'Doggo', 'Cane', 24.00);

$product5 = new Product('Accessori', 'Cuccia', 'Banana', 'Gatto', 60.00);

$product6 = new Product('Giochi', 'Palla', 'Boing', 'Coniglio', 15.00);

// PRODOTTI ACQUISTATI 
$user1->setCart($product1);
$user1->setCart($product2);
$user1->setCart($product4);
// var_dump($user1);

$user2->setCart($product3);
// var_dump($user2);

$premiumUser1->setCart($product4);
$premiumUser1->setDiscount();
// var_dump($premiumUser1);

$premiumUser2->setCart($product5);
$premiumUser2->setCart($product6);
$premiumUser2->setDiscount();
// var_dump($premiumUser2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animalandia</title>
</head>

<body>
    <div class="products">
        <h1>Esperimento di e-commerce bruttino</h1>
        <h2>Utenti standard</h2>
        <h3><?php echo $user1->getName() . '  ' . $user1->getSurname() ?></h3>
        <h4><?php echo $user1->getEmail() . ' - ' . $user1->getAddress() . ' - Scadenza carta di credito: ' . $creditCard1->getExpiration() ?></h4>
        <ul>
            <?php foreach ($user1->getCart() as $product) { ?>
                <li><?php echo $product->getCategory() . ' - ' . $product->getType() . ' - ' . $product->getBrand() . ' - ' . $product->getPet() . ' - Prezzo intero: ' . $product->getPrice() . '&euro;'  ?></li>
            <?php } ?>
        </ul>
        <h3><?php echo $user2->getName() . '  ' . $user2->getSurname() ?></h3>
        <h4><?php echo $user2->getEmail() . ' - ' . $user2->getAddress() . ' - Scadenza carta di credito: ' . $creditCard2->getExpiration() ?></h4>
        <ul>
            <?php foreach ($user2->getCart() as $product) { ?>
                <li><?php echo $product->getCategory() . ' - ' . $product->getType() . ' - ' . $product->getBrand() . ' - ' . $product->getPet() . ' - Prezzo intero: ' . $product->getPrice() . '&euro;'  ?></li>
            <?php } ?>
        </ul>
        <hr>
        <h2>Utenti premium</h2>
        <h3><?php echo $premiumUser1->getName() . '  ' . $premiumUser1->getSurname() ?></h3>
        <h4><?php echo $premiumUser1->getEmail() . ' - ' . $premiumUser1->getAddress() . ' - Scadenza carta di credito: ' . $creditCard3->getExpiration() ?></h4>
        <ul>
            <?php foreach ($premiumUser1->getCart() as $product) { ?>
                <li><?php echo $product->getCategory() . ' - ' . $product->getType() . ' - ' . $product->getBrand() . ' - ' . $product->getPet() . ' - Prezzo intero: ' . $product->getPrice() . '&euro;' . ' - Prezzo scontato: ' . ($premiumUser1->getTotal()) . '&euro;'  ?></li>
            <?php } ?>
        </ul>
        <h3><?php echo $premiumUser2->getName() . '  ' . $premiumUser2->getSurname() ?></h3>
        <h4><?php echo $premiumUser2->getEmail() . ' - ' . $premiumUser2->getAddress() . ' - Scadenza carta di credito: ' . $creditCard4->getExpiration() ?></h4>
        <ul>
            <?php foreach ($premiumUser2->getCart() as $product) { ?>
                <li><?php echo $product->getCategory() . ' - ' . $product->getType() . ' - ' . $product->getBrand() . ' - ' . $product->getPet() . ' - Prezzo intero: ' . $product->getPrice() . '&euro;' . ' - Prezzo scontato: ' . ($premiumUser2->getTotal()) . '&euro;'    ?></li>
            <?php } ?>
        </ul>
    </div>
</body>

</html>