<?php

require_once __DIR__ . '/vendor/autoload.php';

use Takku\Data\People;

$people = new People("Farel");

echo $people->sayHello("Takku") . PHP_EOL;