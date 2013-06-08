<?php
namespace Whizark\DesignPatterns\Uncategorized\MethodChaining;

use Whizark\DesignPatterns\Uncategorized\MethodChaining\ChainableClass;

require '../../../../../vendor/autoload.php';

$result = (new ChainableClass())->doSomethingA(1)
                                ->doSomethingB(2)
                                ->doSomethingC(3)
                                ->execute();
