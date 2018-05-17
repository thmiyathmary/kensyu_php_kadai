<?php
    require_once "Animal.php";
    class Dog extends Animal{
        public function greeting(){
            echo "我輩は".$this->getName()."、".$this->getAge()."才だワン";
        }
    }