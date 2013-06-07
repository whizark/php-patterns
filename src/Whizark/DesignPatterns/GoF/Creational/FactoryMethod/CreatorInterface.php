<?php
namespace Whizark\DesignPatterns\GoF\Creational\FactoryMethod;

use Whizark\DesignPatterns\GoF\Creational\FactoryMethod\ProductInterface;

/**
 * Interface CreatorInterface
 * @package Whizark\DesignPatterns\GoF\Creational\FactoryMethod
 */
interface CreatorInterface
{
    /**
     * A Factory Method.
     *
     * @return ProductInterface
     */
    public function factoryMethod();
}
