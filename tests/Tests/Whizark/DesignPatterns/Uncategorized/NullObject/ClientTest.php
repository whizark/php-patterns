<?php
namespace Tests\Whizark\DesignPatterns\Uncategorized\NullObject;

use Whizark\DesignPatterns\Uncategorized\NullObject\Delegator;
use Whizark\DesignPatterns\Uncategorized\NullObject\RealOperation;
use Whizark\DesignPatterns\Uncategorized\NullObject\NullOperation;

/**
 * Class ClientTest
 * @package Tests\Whizark\DesignPatterns\Uncategorized\NullObject
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test an use case.
     */
    public function testAnUseCaseA()
    {
        $delegator = new Delegator(new RealOperation());
        $delegator->doSomething();
    }

    /**
     * Test an use case.
     */
    public function testAnUseCaseB()
    {
        $delegator = new Delegator(new NullOperation());
        $delegator->doSomething();
    }
}
