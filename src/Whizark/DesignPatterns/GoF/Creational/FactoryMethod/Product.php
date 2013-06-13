<?php
namespace Whizark\DesignPatterns\GoF\Creational\FactoryMethod;

use Whizark\DesignPatterns\GoF\Creational\FactoryMethod\ProductInterface;

/**
 * Class Product
 * @package Whizark\DesignPatterns\GoF\Creational\FactoryMethod
 */
class Product implements ProductInterface
{
    /**
     * @{inheritDoc}
     */
    public function doSomething()
    {
        // Do something.
    }
}
