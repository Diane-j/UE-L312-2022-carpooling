<?php

use App\MyClassA;

require __DIR__ . '/vendor/autoload.php';

$objectA = new MyClassA();
echo $objectA->getTest();