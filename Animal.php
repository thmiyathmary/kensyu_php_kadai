<?php
    abstract class Animal {
        private $name;
        private $age;
        public function __construct($n, $a){
            $this->name = $n;
            $this->age = $a;
        }

        public function getName(){
            return $this->name;
        }

        public function getAge(){
            return $this->age;
        }

        abstract public function greeting();
    }