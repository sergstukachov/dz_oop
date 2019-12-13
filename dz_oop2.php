<?php

//абстрактный родительский класс
abstract class Person
{
    protected $gender;
    protected $name;
    protected $age;

//применение магического метода
    public function __construct($name, $gender, $age)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
    }

    abstract public function printFavoriteFood();
    public function getInfo()
    {
        echo 'May name is ' . $this->name . ' i am ' . $this->gender . ' i am ' . $this->age . ' years old.';
    }
}

class Programmer extends Person implements LoveFishing
{
    public $programmingLanguage;
    protected $food = 'печеньки';

//реализация полиморфизма
    public function printFavoriteFood()
    {
        echo 'Люблю ' . $this->getFood() . ' :)';
    }

//использование инкапсуляции
    protected function getFood()
    {
        return $this->food;
    }

    public function setProgrammingLanguage($programmingLanguage)
    {
       return  $this->programmingLanguage = $programmingLanguage;
    }

    public function fishing()
    {
        echo 'I go fishing in the summer';
  
  }

    public function  getInfo()
    {
        parent::getInfo();
        echo 'I like '. $this->programmingLanguage;
    }
}

class Mechanic extends Person
{
    protected $work = 'car repair';

    public function printFavoriteFood()
    {
        echo 'Люблю сало';
    }
}

class Driver extends Person implements Transport
{
    public function printFavoriteFood()
    {
        echo 'Люблю Хот-дог';
    }

    public function drive()
    {
        echo 'vehicle driver';
    }
}

interface Transport
{
    public function drive();
}

class Trucker extends Driver
{
    public function drive()
    {
        echo 'drive truck';
    }
}

class CraneOperator extends Driver implements LoveFishing
{
    protected $vehicleDrive = 'Drive Cranes';

    public function drive()
    {
        echo $this->vehicleDrive;
    }

    public function fishing()
    {
        echo 'I go fishing every weekend';
    }
}

interface LoveFishing
{
    public function fishing();
}

$programmer = new Programmer('Vanya', 'man', '33');
$programmer->fishing();
$programmer->setProgrammingLanguage('php');
$programmer->printFavoriteFood();
$programmer->getInfo();

$truker = new Trucker(' Jonny ', ' man ', '42');
$truker->getInfo();
$truker->printFavoriteFood();
$truker->drive();
