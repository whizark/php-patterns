<?php
namespace Tests\Whizark\DesignPatterns\DependencyInjection\TraitInjection;

use Whizark\DesignPatterns\DependencyInjection\TraitInjection\Dependency;

/**
 * Class DependecyTest
 * @package Tests\Whizark\DesignPatterns\DependencyInjection\TraitInjection
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
