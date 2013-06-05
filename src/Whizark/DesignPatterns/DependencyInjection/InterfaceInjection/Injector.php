<?php
namespace Whizark\DesignPatterns\DependencyInjection\InterfaceInjection;

use Whizark\DesignPatterns\DependencyInjection\InterfaceInjection\Dependency;
use Whizark\DesignPatterns\DependencyInjection\InterfaceInjection\Dependent;

require '../../../../../vendor/autoload.php';

$dependent = new Dependent();
$dependent->setDependency(new Dependency());
$dependent->doSomething();
