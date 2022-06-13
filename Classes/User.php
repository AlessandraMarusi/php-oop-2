<?php
class User
{
    protected $name;
    protected $surname;
    protected $email;
    protected $address;
    protected $discount = 0;
    protected $credit_card;
    protected $cart;

    function __construct($_name, $_surname, $_email, $_address, $_credit_card = [], $_cart = []) //aggiungere carta credito
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->address = $_address;
        $this->credit_card = $_credit_card;
        $this->cart = $_cart;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getSurname()
    {
        return $this->surname;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function setName($_name)
    {
        $this->name = $_name;
    }
    public function setSurname($_surname)
    {
        $this->surname = $_surname;
    }
    public function setEmail($_email)
    {
        if (!strpos($_email, '@')) {
            throw new Exception('Email non valida');
        } else {
            $this->email = $_email;
        }
    }
    public function setAddress($_address)
    {
        $this->address = $_address;
    }

    public function getCreditCard()
    {
        return $this->credit_card;
    }
    public function setCreditCard($_credit_card)
    {
        $this->credit_card[] = $_credit_card;
    }
    public function getCart()
    {
        return $this->cart;
    }
    public function setCart($_cart)
    {
        $this->cart[] = $_cart;
    }
}