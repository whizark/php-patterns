<?php
namespace Whizark\DesignPatterns\GoF\Structural\Bridge;

use Whizark\DesignPatterns\GoF\Structural\Bridge\ConcreteImplementorA;
use Whizark\DesignPatterns\GoF\Structural\Bridge\ConcreteImplementorB;
use Whizark\DesignPatterns\GoF\Structural\Bridge\RefinedAbstractionA;
use Whizark\DesignPatterns\GoF\Structural\Bridge\RefinedAbstractionB;

require '../../../../../../vendor/autoload.php';

$abstractionAWithImplementorA = new RefinedAbstractionA(new ConcreteImplementorA());
$abstractionAWithImplementorA->doSomething();

$abstractionAWithImplementorB = new RefinedAbstractionA(new ConcreteImplementorB());
$abstractionAWithImplementorB->doSomething();

$abstractionBWithImplementorA = new RefinedAbstractionB(new ConcreteImplementorA());
$abstractionBWithImplementorA->doSomething();

$abstractionBWithImplementorB = new RefinedAbstractionB(new ConcreteImplementorB());
$abstractionBWithImplementorB->doSomething();
