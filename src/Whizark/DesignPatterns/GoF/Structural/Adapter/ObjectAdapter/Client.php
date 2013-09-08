<?php
namespace Whizark\DesignPatterns\GoF\Structural\Adapter\ObjectAdapter;

use Whizark\DesignPatterns\GoF\Structural\Adapter\ObjectAdapter\Adapter;

require '../../../../../../../vendor/autoload.php';

$adapter = new Adapter(new AdapteeA(), new AdapteeB());
$adapter->targetMethod();
