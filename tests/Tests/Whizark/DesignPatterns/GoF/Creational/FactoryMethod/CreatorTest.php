<?php
namespace Tests\Whizark\DesignPatterns\GoF\Creational\FactoryMethod;

use Whizark\DesignPatterns\GoF\Creational\FactoryMethod\Creator;

/**
 * Class CreatorTest
 * @package Tests\Whizark\DesignPatterns\GoF\Creational\FactoryMethod
 */
class CreatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test factoryMethod().
     */
    public function testFactoryMethod()
    {
        $creator = new Creator();
        $product = $creator->factoryMethod();
        $this->assertInstanceOf('Whizark\DesignPatterns\GoF\Creational\FactoryMethod\ProductInterface', $product);
    }
}
