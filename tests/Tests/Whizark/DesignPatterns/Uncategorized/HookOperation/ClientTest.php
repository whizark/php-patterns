<?php
namespace Tests\Whizark\DesignPatterns\Uncategorized\HookOperation;

use Whizark\DesignPatterns\Uncategorized\HookOperation\Hook;
use Whizark\DesignPatterns\Uncategorized\HookOperation\HookedClass;

class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test an use case.
     */
    public function testAnUseCase()
    {
        $hookedObject = new HookedClass(new Hook());
        $hookedObject->doSomething();
    }
}
