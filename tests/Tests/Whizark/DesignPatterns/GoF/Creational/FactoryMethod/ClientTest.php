<?php

/*
 * php-patterns
 */

namespace Tests\Whizark\DesignPatterns\GoF\Creational\FactoryMethod;

use Whizark\DesignPatterns\GoF\Creational\FactoryMethod\Creator;

/**
 * ClientTest tests the factory method design pattern
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{

    protected $factory;

    protected function setUp()
    {
        $this->factory = new Creator();
    }

    public function testCreation()
    {
        $product = $this->factory->factoryMethod();
        $this->assertInstanceOf('Whizark\DesignPatterns\GoF\Creational\FactoryMethod\ProductInterface', $product);
    }

}