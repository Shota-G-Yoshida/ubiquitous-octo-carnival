<?php

class Animal {
    public $cry = 'bowbow!';
    public function bow(){
        echo 'bowbow!' . PHP_EOL;
    }
}

$cryy = new Animal;
$cryy -> bow();
echo $cryy -> cry . PHP_EOL;


class Dog extends Animal {
    
}

class Cat extends Animal {
    public $cry = 'nya';
}

$cryy2 = new Dog;
echo $cryy2 -> cry . PHP_EOL;

$cryy3 = new Cat;
echo $cryy3 -> cry . PHP_EOL;

?>