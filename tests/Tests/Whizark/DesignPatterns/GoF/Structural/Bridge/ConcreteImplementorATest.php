<?php
namespace Tests\Whizark\DesignPatterns\GoF\Structural\Bridge;

use Whizark\DesignPatterns\GoF\Structural\Bridge\ConcreteImplementorA;

/**
 * Class ConcreteImplementorATest
 * @package Tests\Whizark\DesignPatterns\GoF\Structural\Bridge
 */
class ConcreteImplementorATest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test implementaion().
     */
    public function testImplementation()
    {
        $implementor = new ConcreteImplementorA();
        $implementor->implementation();
    }
}