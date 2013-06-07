<?php
namespace Whizark\DesignPatterns\GoF\Creational\Prototype;

/**
 * Interface PrototypeInterface
 * @package Whizark\DesignPatterns\GoF\Creational\Prototype
 */
interface PrototypeInterface
{
    /**
     * The built-in magical method that will be called after a cloning.
     *
     * @return void
     */
    public function __clone();
}
