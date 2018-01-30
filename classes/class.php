<?php

    class Car
    {
        public $color;
        public $price;

        public function getCar()
        {
            echo $this->color;
            echo $this->price;
        }
    }

    $audi = new Car();
    $audi->color = "white";
    $audi->price = 100000;
    $audi->getCar();

    $audiQ7 = new Car();
    $audiQ7->color = "black";
    $audiQ7->price = 500000;
    $audiQ7->getCar();


    class TV
    {
        public $model;
        public $diag = 40;
        public $price;

        public function getTV()
        {
            echo $this->model;
            echo $this->diag;
            echo $this->price;
        }
    }

$samsung = new TV();
$samsung->model = "Samsung";
$samsung->diag = 50;
$samsung->price = 20000;

$samsung->getTV();

$sharp = new TV();
$sharp->model = "Sharp";
$sharp->price = 10000;

$sharp->getTV();


class Pen
{
    private $color;
    private $property;

    public function __construct($col, $property)
    {
        $this->color = $col;
        $this->property = $property;
    }

    public function getPen()
    {
        echo $this->color;
        echo $this->property;
    }


}

$ballpen = new Pen("blue", "ball");
$gelpen = new Pen("black", "gel");

$ballpen->getPen();
$gelpen->getPen();


class Duck
{
    public static $property = 0;

    public function __construct()
    {
        self::$property++;
    }

    public function getDuck()
    {
        echo self::$property;
    }
}

echo Duck::$property;

$utya = new Duck();
$greyDuck = new Duck();

$utya->getDuck();
$greyDuck->getDuck();