<?php
namespace Tests\Whizark\DesignPatterns\Uncategorized\NullObject;

use Whizark\DesignPatterns\Uncategorized\NullObject\Delegator;

/**
 * Class DelegatorTest
 * @package Tests\Whizark\DesignPatterns\Uncategorized\NullObject
 */
class DelegatorTest extends \PHPUnit_Framework_TestCase
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
        $mockedOperation = \Mockery::mock('Whizark\DesignPatterns\Uncategorized\NullObject\OperationInterface');
        $mockedOperation->shouldReceive('request')
                        ->once();

        $delegator = new Delegator($mockedOperation);
        $delegator->doSomething();
    }
}
