<?php
namespace Tests\Whizark\DesignPatterns\GoF\Structural\Facade;

use Whizark\DesignPatterns\GoF\Structural\Facade\ClassB;

/**
 * Class ClassBTest
 * @package Tests\Whizark\DesignPatterns\GoF\Structural\Facade
 */
class ClassBTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test doSomething().
     */
    public function testDoSomething()
    {
        $classB = new ClassB();
        $classB->doSomething();
    }
}
