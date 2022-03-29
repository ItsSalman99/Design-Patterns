<?php

//Interface for payment

interface PaymentStrategy {
    public function pay($amount);
}