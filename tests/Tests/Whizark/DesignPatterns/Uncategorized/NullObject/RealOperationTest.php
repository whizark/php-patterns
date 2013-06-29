<?php
namespace Tests\Whizark\DesignPatterns\Uncategorized\NullObject;

use Whizark\DesignPatterns\Uncategorized\NullObject\RealOperation;

/**
 * Class RealOperationTest
 * @package Tests\Whizark\DesignPatterns\Uncategorized\NullObject
 */
class RealOperationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test request().
     */
    public function testRequest()
    {
        $delegator = new RealOperation();
        $delegator->request();
    }
}
