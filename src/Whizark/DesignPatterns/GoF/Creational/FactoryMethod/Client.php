<?php
namespace Whizark\DesignPatterns\GoF\Creational\FactoryMethod;

use Whizark\DesignPatterns\GoF\Creational\FactoryMethod\Creator;

require '../../../../../../vendor/autoload.php';

$creator = new Creator();
$product = $creator->factoryMethod();
$product->doSomething();
