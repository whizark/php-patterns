<?php
namespace Tests\Whizark\DesignPatterns\DependencyInjection\ConstructorInjection;

use Whizark\DesignPatterns\DependencyInjection\ConstructorInjection\Dependency;

/**
 * Class DependecyTest
 * @package Tests\Whizark\DesignPatterns\DependencyInjection\ConstructorInjection
 */
class DependecyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test doSomething().
     */
    public function testDoSomething()
    {
        $dependency = new Dependency();
        $dependency->doSomething();
    }
}
