<?php
namespace Tests\Whizark\DesignPatterns\GoF\Structural\Facade;

use Whizark\DesignPatterns\GoF\Structural\Facade\Facade;

/**
 * Class FacadeTest
 * @package Tests\Whizark\DesignPatterns\GoF\Structural\Facade
 */
class FacadeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test doSomething().
     */
    public function testDoSomething()
    {
        $facade = new Facade();
        $facade->doSomething();
    }
}
