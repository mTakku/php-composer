<?php

require_once __DIR__ . '/vendor/autoload.php';

$customer = new \Takku\Belajar\Customer("Farel");

echo $customer->sayHello() . PHP_EOL;
echo $customer->sayHello("Zeta") . PHP_EOL;