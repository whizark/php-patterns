<?php
namespace Tests\Whizark\DesignPatterns\Uncategorized\HookOperation;

use Whizark\DesignPatterns\Uncategorized\HookOperation\HookedClass;

/**
 * Class HookedClassTest
 * @package Tests\Whizark\DesignPatterns\Uncategorized\HookOperation
 */
class HookedClassTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Clean up object(s).
     */
    public function tearDown()
    {
        \Mockery::close();
    }

    /**
     * Test doSomething().
     */
    public function testDoSomething()
    {
        $mockedHook = \Mockery::mock('Whizark\DesignPatterns\Uncategorized\HookOperation\HookInterface');
        $mockedHook->shouldReceive('hookOperationA')
                   ->once()
                   ->shouldReceive('hookOperationB')
                   ->once();

        $hookedObject = new HookedClass($mockedHook);
        $hookedObject->doSomething();
    }
}
