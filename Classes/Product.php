<?php
class Product
{
    protected $category;
    protected $type;
    protected $brand;
    protected $pet;
    protected $price;

    function __construct($_category, $_type, $_brand, $_pet, $_price)
    {
        $this->category = $_category;
        $this->type = $_type;
        $this->brand = $_brand;
        $this->pet = $_pet;
        $this->price = $_price;
    }
    public function setCategory($_category)
    {
        $this->category = $_category;
    }
    public function getCategory()
    {
        return $this->category;
    }

    public function setType($_type)
    {
        $this->type = $_type;
    }
    public function getType()
    {
        return $this->type;
    }

    public function setBrand($_brand)
    {
        $this->brand = $_brand;
    }
    public function getBrand()
    {
        return $this->brand;
    }

    public function setPet($_pet)
    {
        $this->pet = $_pet;
    }
    public function getPet()
    {
        return $this->pet;
    }

    public function setPrice($_price)
    {
        $this->price = $_price;
    }
    public function getPrice()
    {
        return $this->price;
    }
}