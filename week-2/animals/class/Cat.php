<?php

namespace App;

class Cat extends Animal
{
    public function __construct()
    {
        $this->sound = 'Miaou';
    }
}