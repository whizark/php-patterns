<?php
namespace Whizark\DesignPatterns\GoF\Creational\Prototype;

require '../../../../../../vendor/autoload.php';

$prototype       = new Prototype();
$clonedPrototype = clone $prototype;
