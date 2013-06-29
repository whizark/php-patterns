<?php
namespace Tests\Whizark\DesignPatterns\Uncategorized\HookOperation;

use Whizark\DesignPatterns\Uncategorized\HookOperation\Hook;

/**
 * Class HookTest
 * @package Tests\Whizark\DesignPatterns\Uncategorized\HookOperation
 */
class HookTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test hookOperationA().
     */
    public function testHookOperationA()
    {
        $hook = new Hook();
        $hook->hookOperationA();
    }

    /**
     * Test hookOperationB().
     */
    public function testHookOperationB()
    {
        $hook = new Hook();
        $hook->hookOperationB();
    }
}
