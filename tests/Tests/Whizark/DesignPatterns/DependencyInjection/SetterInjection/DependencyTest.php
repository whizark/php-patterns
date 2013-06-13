<?php
namespace Tests\Whizark\DesignPatterns\DependencyInjection\SetterInjection;

use Whizark\DesignPatterns\DependencyInjection\SetterInjection\Dependency;

/**
 * Class DependecyTest
 * @package Tests\Whizark\DesignPatterns\DependencyInjection\SetterInjection
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
