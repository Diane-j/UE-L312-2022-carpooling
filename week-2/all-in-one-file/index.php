<?php

class MyClassA
{
    public function getTest()
    {
        return 'All in one file';
    }
}

class MyClassB
{
    public function getSound()
    {

        return 'Test';
    }
}

$myClass = new MyClassA();
echo $myClass->getTest();

$myClassB = new MyClassB();
echo $myClassB->getSound();
