<?php
namespace Whizark\DesignPatterns\GoF\Behavioral\TemplateMethod;

/**
 * Class AbstractClass
 * @package Whizark\DesignPatterns\GoF\Behavioral\TemplateMethod
 */
abstract class AbstractClass
{
    /**
     * Do something.
     *
     * @return mixed
     */
    abstract protected function doSomethingA();

    /**
     * Do something.
     *
     * @return mixed
     */
    abstract protected function doSomethingB();

    /**
     * A Template Method.
     */
    final public function templateMethod()
    {
        $this->doSomethingA();

        // Do something if needed.

        $this->doSomethingB();
    }
}
