<?php
namespace Tests\Whizark\DesignPatterns\GoF\Structural\Facade;

use Whizark\DesignPatterns\GoF\Structural\Facade\Facade;

/**
 * Class FacadeTest
 * @package Tests\Whizark\DesignPatterns\GoF\Structural\Facade
 */
class FacadeTest
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
