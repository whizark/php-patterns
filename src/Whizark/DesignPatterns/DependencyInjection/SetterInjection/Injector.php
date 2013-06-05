<?php
namespace Whizark\DesignPatterns\DependencyInjection\SetterInjection;

use Whizark\DesignPatterns\DependencyInjection\SetterInjection\Dependency;
use Whizark\DesignPatterns\DependencyInjection\SetterInjection\Dependent;

require '../../../../../vendor/autoload.php';

$dependent = new Dependent();
$dependent->setDependency(new Dependency());
$dependent->doSomething();
