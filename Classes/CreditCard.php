<?php
class CreditCard
{
    private $name;
    private $number;
    private $cvv;
    private $expiration;

    function __construct($_name, $_number, $_cvv, $_expiration = "")
    {
        $this->name = $_name;
        $this->number = $_number;
        $this->cvv = $_cvv;
        $this->expiration = $_expiration;
    }
    public function setName($_name)
    {
        $this->name = $_name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setNumber($_number)
    {
        $this->number = $_number;
    }
    public function getNumber()
    {
        return $this->number;
    }
    public function setCvv($_cvv)
    {
        $this->cvv = $_cvv;
    }
    public function getCvv()
    {
        return $this->cvv;
    }
    public function setExpiration($_expiration)
    {
        if ($_expiration < date("Y-m-d")) {
            //     throw new Exception('Carta di credito scaduta');
            $this->expiration = $_expiration . ' (Carta di credito scaduta, inserire un nuovo metodo di pagamento) ';
        } else {
            $this->expiration = $_expiration;
        }
    }
    public function getExpiration()
    {
        return $this->expiration;
    }
}