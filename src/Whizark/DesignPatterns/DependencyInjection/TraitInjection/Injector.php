<?php
namespace Whizark\DesignPatterns\DependencyInjection\TraitInjection;

use Whizark\DesignPatterns\DependencyInjection\TraitInjection\Dependency;
use Whizark\DesignPatterns\DependencyInjection\TraitInjection\Dependent;

require '../../../../../vendor/autoload.php';

$dependent = new Dependent;
$dependent->setDependency(new Dependency());
$dependent->doSomething();
