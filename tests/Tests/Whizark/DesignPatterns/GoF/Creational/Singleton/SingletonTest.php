<?php
namespace Tests\Whizark\DesignPatterns\GoF\Creational\Singleton;

use Whizark\DesignPatterns\GoF\Creational\Singleton\Singleton;

/**
 * Class SingletonTest
 * @package Tests\Whizark\DesignPatterns\GoF\Creational\Singleton
 */
class SingletonTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test constructor's instantiability.
     */
    public function testInstantiability()
    {
        $reflectionClass = new \ReflectionClass('Whizark\DesignPatterns\GoF\Creational\Singleton\Singleton');
        $this->assertFalse($reflectionClass->IsInstantiable());
    }

    /**
     * Test getInstance(),
     * which should create an object & return the new instance at the first call.
     */
    public function testInstantiation()
    {
        $instance = Singleton::getInstance();

        $this->assertInstanceOf('Whizark\DesignPatterns\GoF\Creational\Singleton\Singleton', $instance);
    }

    /**
     * Test getInstance(),
     * which should return the same instance if an object has already been instantiated.
     */
    public function testInstanceIdentity()
    {
        $instanceA = Singleton::getInstance();
        $instanceB = Singleton::getInstance();

        $this->assertSame($instanceA, $instanceB);
    }

    /**
     * Test cloning, which should not be allowed.
     *
     * @expectedException \RuntimeException
     */
    public function testCloning()
    {
        $instance       = Singleton::getInstance();
        $clonedInstance = clone $instance;
    }

    /**
     * Test unserialization, which should not be allowd.
     *
     * @expectedException \RuntimeException
     */
    public function testUnserialization()
    {
        $instance             = Singleton::getInstance();
        $serializedInstance   = serialize($instance);
        $unserializedInstance = unserialize($serializedInstance);
    }
}
