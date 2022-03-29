<?php

//Syed Salman Abbas
//10089


class CreditCardStrategy implements PaymentStrategy {

    //attributes
    private $name;
    private $cardNumber;
    private $cvv;
    private $dateOfExpiry;

    //constructor
    public function __construct($name, $cardNumber, $cvv, $dateOfExpiry) {
        $this->name = $name;
        $this->cardNumber = $cardNumber;
        $this->cvv = $cvv;
        $this->dateOfExpiry = $dateOfExpiry;
    }

    //implementing
    public function pay($amount)
    {
        echo '<h1> $ '. $amount . ' successfully paid by credit card!'. '</h1>' . '<br>';
    }


}
