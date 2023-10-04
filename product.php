<?php

class product{
    private $id;
    private $name;
    Private $price;
    public function __construct($Pid, $PName, $PPrice){
        $this->id = $Pid;
        $this->name = $PName;
        $this->price = $PPrice;
    }
    public function getFormattedPrice(){
        return number_format($this->price, 2);
    }
    public function showDetails(){
        echo "Product Details: \n";
        echo "-ID: 1\n";
        echo "-Name: T-shirt\n";
        echo "-Price: $"."{$this->getFormattedPrice()} \n";
    }
}

$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();

?>