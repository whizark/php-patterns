<?php
namespace Tests\Whizark\DesignPatterns\GoF\Structural\Facade;

use Whizark\DesignPatterns\GoF\Structural\Facade\ClassC;

/**
 * Class ClassCTest
 * @package Tests\Whizark\DesignPatterns\GoF\Structural\Facade
 */
class ClassCTest
{
    /**
     * Test doSomething().
     */
    public function testDoSomething()
    {
        $classC = new ClassC();
        $classC->doSomething();
    }
}
