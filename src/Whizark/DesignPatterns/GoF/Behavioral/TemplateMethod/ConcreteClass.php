<?php
namespace Whizark\DesignPatterns\GoF\Behavioral\TemplateMethod;

use Whizark\DesignPatterns\GoF\Behavioral\TemplateMethod\AbstractClass;

/**
 * Class ConcreteClass
 * @package Whizark\DesignPatterns\GoF\Behavioral\TemplateMethod
 */
class ConcreteClass extends AbstractClass
{
    /**
     * {@inheritDoc}
     */
    protected function doSomethingA()
    {
        // Do something.
    }

    /**
     * {@inheritDoc}
     */
    protected function doSomethingB()
    {
        // Do something.
    }
}
