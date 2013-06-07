<?php
namespace Whizark\DesignPatterns\Uncategorized\HookOperation;

use Whizark\DesignPatterns\Uncategorized\HookOperation\Hook;
use Whizark\DesignPatterns\Uncategorized\HookOperation\HookedClass;

require '../../../../../vendor/autoload.php';

$hookedObject = new HookedClass(new Hook());
$hookedObject->doSomething();
