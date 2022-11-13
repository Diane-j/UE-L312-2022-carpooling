<?php

require 'autoloader.php';
Autoloader::register();

$cat = new Cat();
echo $cat->getSound();