<?php
namespace Tests\Whizark\DesignPatterns\GoF\Creational\Prototype;

use Whizark\DesignPatterns\GoF\Creational\Prototype\Prototype;

/**
 * Class ClientTest
 * @package Tests\Whizark\DesignPatterns\GoF\Creational\Prototype
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test an use case.
     */
    public function testAnUseCase()
    {
        $prototype       = new Prototype();
        $clonedPrototype = clone $prototype;
    }
}
