<?php
namespace Tests\Whizark\DesignPatterns\GoF\Creational\Singleton;

use Whizark\DesignPatterns\GoF\Creational\Singleton\Singleton;

/**
 * Class ClientTest
 * @package Tests\Whizark\DesignPatterns\GoF\Creational\Singleton
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test an use case.
     */
    public function testAnUseCase()
    {
        $instance = Singleton::getInstance();
    }
}
