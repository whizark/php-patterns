<?php
namespace Whizark\DesignPatterns\GoF\Structural\Facade;

use Whizark\DesignPatterns\GoF\Structural\Facade\ClassA;
use Whizark\DesignPatterns\GoF\Structural\Facade\ClassB;
use Whizark\DesignPatterns\GoF\Structural\Facade\ClassC;

/**
 * Class Facade
 * @package Whizark\DesignPatterns\GoF\Structural\Facade
 */
class Facade
{
    /**
     * @var null|ClassA
     */
    private $classA = null;
    /**
     * @var null|ClassB
     */
    private $classB = null;
    /**
     * @var null|ClassC
     */
    private $classC = null;

    /**
     * The constructor.
     */
    public function __construct()
    {
        $this->classA = new ClassA();
        $this->classB = new ClassB();
        $this->classC = new ClassC();
    }

    /**
     * A simplified interface to do something with the underlying object(s).
     */
    public function doSomething()
    {
        $this->classA->doSomething();
        $this->classB->doSomething();
        $this->classC->doSomething();
    }
}
