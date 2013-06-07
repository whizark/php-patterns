<?php
namespace Whizark\DesignPatterns\GoF\Structural\Adapter\ObjectAdapter;

use Whizark\DesignPatterns\GoF\Structural\Adapter\ObjectAdapter\Adapter;

require '../../../../../../../vendor/autoload.php';

$adapter = new Adapter();
$adapter->targetMethod();
