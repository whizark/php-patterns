<?php
namespace Whizark\DesignPatterns\GoF\Creational\FactoryMethod;

use Whizark\DesignPatterns\GoF\Creational\FactoryMethod\CreatorInterface;
use Whizark\DesignPatterns\GoF\Creational\FactoryMethod\Product;

/**
 * Class Creator
 * @package Whizark\DesignPatterns\GoF\Creational\FactoryMethod
 */
class Creator implements CreatorInterface
{
    /**
     * {@inheritDoc}
     */
    public function factoryMethod()
    {
        // Create and return an instance of the corresponding class.
        return new Product();
    }
}
