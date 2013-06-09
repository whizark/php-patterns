<?php
namespace Whizark\DesignPatterns\GoF\Structural\Decorator;

use Whizark\DesignPatterns\GoF\Structural\Decorator\ConcreteComponent;

require '../../../../../../vendor/autoload.php';

$decoratedComponentA = new ConcreteDecoratorA(new ConcreteComponent());
$decoratedComponentA->doSomething();

$decoratedComponentB = new ConcreteDecoratorB(new ConcreteComponent());
$decoratedComponentB->doSomething();

$decoratedComponentC = new ConcreteDecoratorA(new ConcreteDecoratorB(new ConcreteComponent()));
$decoratedComponentC->doSomething();
