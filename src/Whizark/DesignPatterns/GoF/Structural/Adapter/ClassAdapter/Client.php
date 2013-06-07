<?php
namespace Whizark\DesignPatterns\GoF\Structural\Adapter\ClassAdapter;

use Whizark\DesignPatterns\GoF\Structural\Adapter\ClassAdapter\Adapter;

require '../../../../../../../vendor/autoload.php';

$adapter = new Adapter();
$adapter->targetMethod();
