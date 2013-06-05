<?php
namespace Whizark\DesignPatterns\DependencyInjection\ConstructorInjection;

use Whizark\DesignPatterns\DependencyInjection\ConstructorInjection\Dependency;
use Whizark\DesignPatterns\DependencyInjection\ConstructorInjection\Dependent;

require '../../../../../vendor/autoload.php';

$dependent = new Dependent(new Dependency());
$dependent->doSomething();
