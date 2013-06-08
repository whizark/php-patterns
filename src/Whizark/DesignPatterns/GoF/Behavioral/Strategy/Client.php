<?php
namespace Whizark\DesignPatterns\GoF\Behavioral\Strategy;

use Whizark\DesignPatterns\GoF\Behavioral\Strategy\Context;
use Whizark\DesignPatterns\GoF\Behavioral\Strategy\StrategyA;
use Whizark\DesignPatterns\GoF\Behavioral\Strategy\StrategyB;

require '../../../../../../vendor/autoload.php';

$contextA = new Context(new StrategyA());
$contextA->doSomething();

$contextB = new Context(new StrategyB());
$contextB->doSomething();
