<?php

// Написать класс Cat, который наследуется от класcа Animal. Класс Animal имеет метод getName (name можно передать в конструктор). Класс Cat имеет метод meow (возвращает строку «Cat {catname} is sayig meow».
// Пример использования:
// $cat = new Cat (’garfield’);
// $cat->getName () === ’garfield’ // true;
// $cat->meow () === ’Cat garfield is saying meow’ // true;


class Animal {
 
 private $name;

 public function __construct($name) {
     $this->name = $name;
 }

 public function getName() {
     return $this->name; 
 }

}

class Cat extends Animal {
 
 public function meow() {
     $name = $this->getName();
     return "Cat $name is saying meow";
 }

}

$cat = new Cat('garfield');
echo $cat->meow();
