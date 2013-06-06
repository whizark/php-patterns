<?php
namespace Whizark\DesignPatterns\Uncategorized\NullObject;

use Whizark\DesignPatterns\Uncategorized\NullObject\RealOperation;
use Whizark\DesignPatterns\Uncategorized\NullObject\NullOperation;

require '../../../../../vendor/autoload.php';

$delegatorA = new Delegator(new RealOperation());
$delegatorB = new Delegator(new NullOperation());

$delegatorA->doSomething();
$delegatorB->doSomething(); // Actually do nothing, or do something with no side effects.
