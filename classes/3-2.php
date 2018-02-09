<?php

abstract class Product
{
    protected $name;
    protected $price;
    protected $discount;
    protected $delivery = 250;

    public function __construct($name, $price, $discount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->discount = $discount;
        //$this->delivery = $delivery;
    }
}

trait DiscountPrice
{
    public function getDiscountPrice()
    {
        return $this->price - $this->price * $this->discount / 100;
    }
}

trait DeliveryPrice
{
    public function getDeliveryPrice()
    {
        if ($this->discount !== 0) {
            $this->delivery = 300;
        }

        return $this->delivery;
    }
}

class Phone extends Product
{
    use DiscountPrice;
    use DeliveryPrice;

    public function __construct($name, $price, $discount = 0)
    {
        parent::__construct($name, $price, $discount);
    }
}

class Laptop extends Product
{
    use DiscountPrice;
    use DeliveryPrice;

    public function __construct($name, $price, $discount = 10)
    {
        parent::__construct($name, $price, $discount);
    }
}

class TV extends Product
{
    use DiscountPrice;
    use DeliveryPrice;

    protected $weight;

    public function __construct($name, $price, $weight, $discount = 10)
    {
        parent::__construct($name, $price, $discount);
        $this->weight = $weight;
    }
}

$xiaomi = new Phone('xiaomi', 8000);

$acer = new Laptop('acer', 10000);

$sharp = new TV('sharp', 15000, 10);


echo $xiaomi->getDeliveryPrice();
echo $acer->getDeliveryPrice();
echo $sharp->getDeliveryPrice();


echo $xiaomi->getDiscountPrice();
echo $acer->getDiscountPrice();
echo $sharp->getDiscountPrice();

$sum = $xiaomi->getDiscountPrice() + $acer->getDiscountPrice() + $sharp->getDiscountPrice();
echo "Сумма = " . $sum;