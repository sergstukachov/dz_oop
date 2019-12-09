<?php

// oop dz1.1  Написать структуру из двух классов, где один наследует другой.
abstract class Animals
{
    public $name, $woolColor, $favoriteFood, $movementSpeed;

    public function getClassInfo()
    {
        return 'name = ' . $this->name . ", wool color = " . $this->woolColor . ", speed = " . $this->movementSpeed . ", favorite food = " . $this->favoriteFood;
    }
}

class WildCats extends Animals
{
    public $name = 'wildCats';
    public $woolColor = 'gray';
    public $favoriteFood = 'mouse';
    public $movementSpeed = 'high speed 80 km';
}

//dz1.2 Дописать третий класс
class HomeCats extends WildCats
{
    public $name = 'home cats';
    public $woolColor = 'red';
    public $favoriteFood = 'kiticat';
    public $movementSpeed = 'speed 20 km';
    public $character = 'lazy';

    public function getClassInfo()
    {
        return parent::getClassInfo() . ", character = " . $this->character;
    }
}

$wildCat = new WildCats();
$homeCat = new HomeCats();
echo $wildCat->getClassInfo() . '</br>';
echo $homeCat->getClassInfo() . '</br>';

// dz1.4 Задача по рекурсии: Написать функцию рекурсивную которая подсчитывает сумму тех элементов массива которые кратные двум
$arr = [4, 5, 6, 77, 98, 65, 44, 8, 8, 8];
$cArr = count($arr);
$sizeEven = 0;
function evenArr($arr, $cArr, $sizeEven)
{
    $a = $cArr - 1;

    if ($a < 0) {
        return $sizeEven;
    }
    if ($arr[$a] % 2 == 0) {
        $sizeEven++;
    }

    return evenArr($arr, $cArr - 1, $sizeEven);
}

echo evenArr($arr, $cArr, $sizeEven);