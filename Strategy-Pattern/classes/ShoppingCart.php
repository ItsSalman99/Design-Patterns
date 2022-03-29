<?php

class ShoppingCart {

    private $items;

    public function addItem(Item $item)
    {
        $this->items[] = $item;
    }

    public function calculateTotel()
    {
        $sum = 0;

        foreach ($this->items as $item)
        {
            $sum += $item->price;
        }
        return $sum;
    }

    public function pay($paymentMethod)
    {
        $amount = $this->calculateTotel();

        $paymentMethod->pay($amount);
        
    }

}