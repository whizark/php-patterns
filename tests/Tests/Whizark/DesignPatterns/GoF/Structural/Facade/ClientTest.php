<?php
namespace Tests\Whizark\DesignPatterns\GoF\Structural\Facade;

use Whizark\DesignPatterns\GoF\Structural\Facade\Facade;

/**
 * Class ClientTest
 * @package Tests\Whizark\DesignPatterns\GoF\Structural\Facade
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test an use case.
     */
    public function testAnUseCase()
    {
        $facade = new Facade();
        $facade->doSomething();
    }
}
