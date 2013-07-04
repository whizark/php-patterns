<?php
namespace Tests\Whizark\DesignPatterns\GoF\Creational\Prototype;

use Whizark\DesignPatterns\GoF\Creational\Prototype\Prototype;

/**
 * Class PrototypeTest
 * @package Tests\Whizark\DesignPatterns\GoF\Creational\Prototype
 */
class PrototypeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test cloning,
     * which should clone an object & return the new instance of the prototype.
     */
    public function testCloning()
    {
        $prototype       = new Prototype();
        $clonedPrototype = clone $prototype;

        $this->assertInstanceOf('Whizark\DesignPatterns\GoF\Creational\Prototype\Prototype', $clonedPrototype);
    }

    /**
     * Test cloning.
     * The cloned object should be different from the prototype.
     */
    public function testInstanceDifference()
    {
        $prototype       = new Prototype();
        $clonedPrototype = clone $prototype;

        $this->assertNotSame($prototype, $clonedPrototype);
    }
}
