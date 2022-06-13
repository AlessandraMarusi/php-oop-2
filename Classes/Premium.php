<?php
require_once __DIR__ . '/User.php';
class Premium extends User
{
    protected $discount;

    public function setDiscount()
    {
        $this->discount = 15;
    }
    public function getTotal(){
        $total = 0;
        foreach($this->cart as $product) {
            $total += $product->getPrice();
        }
        $total = $total * $this->discount / 100;
        return $total;
    }
}