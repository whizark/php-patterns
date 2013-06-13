<?php
namespace Tests\Whizark\DesignPatterns\GoF\Creational\FactoryMethod;

use Whizark\DesignPatterns\GoF\Creational\FactoryMethod\Product;

/**
 * Class ProductTest
 * @package Tests\Whizark\DesignPatterns\GoF\Creational\FactoryMethod
 */
class ProductTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test doSomething().
     */
    public function testDoSomething()
    {
        $product = new Product();
        $product->doSomething();
    }
}
