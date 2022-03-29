<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        include 'classes/ShoppingCart.php';
        include 'classes/Item.php';
        include 'classes/PaypalStrategy.php';
        include 'classes/CreditCardStrategy.php';

        $shoppingCart = new ShoppingCart();
        $item = new Item('Iphone', 2000);
        $item2 = new Item('Laptop', 7000);

        $shoppingCart->addItem($item);
        $shoppingCart->addItem($item2);

        $shoppingCart->pay(new PaypalStrategy("salman@email.com", "1234"));
        $shoppingCart->pay(new CreditCardStrategy("salman", "1234567890123456","786","02/25"));

    ?>


</body>
</html>