<?php
namespace Tests\Whizark\DesignPatterns\DependencyInjection\InterfaceInjection;

use Whizark\DesignPatterns\DependencyInjection\InterfaceInjection\Dependency;

/**
 * Class DependecyTest
 * @package Tests\Whizark\DesignPatterns\DependencyInjection\InterfaceInjection
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
