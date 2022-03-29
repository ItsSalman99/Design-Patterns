<?php 

include 'PaymentStrategy.php';

class PaypalStrategy implements PaymentStrategy {

    private $email;
    private $password;

    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }

    public function pay($amount)
    {
        echo '<h1> $ '. $amount . ' successfully paid by Paypal!'. '</h1>' . '<br>';
    }

}