<?php

use App\Cat;

require __DIR__ . '/vendor/autoload.php';

$cat = new Cat();
echo $cat->sound;