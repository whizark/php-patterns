<?php
namespace Tests\Whizark\DesignPatterns\Uncategorized\NullObject;

use Whizark\DesignPatterns\Uncategorized\NullObject\NullOperation;

/**
 * Class NullOperationTest
 * @package Tests\Whizark\DesignPatterns\Uncategorized\NullObject
 */
class NullOperationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test request().
     */
    public function testRequest()
    {
        $delegator = new NullOperation();
        $delegator->request();
    }
}
