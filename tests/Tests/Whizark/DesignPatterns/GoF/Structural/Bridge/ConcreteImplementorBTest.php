<?php
namespace Tests\Whizark\DesignPatterns\GoF\Structural\Bridge;

use Whizark\DesignPatterns\GoF\Structural\Bridge\ConcreteImplementorB;

/**
 * Class ConcreteImplementorBTest
 * @package Tests\Whizark\DesignPatterns\GoF\Structural\Bridge
 */
class ConcreteImplementorBTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test implementation().
     */
    public function testImplementation()
    {
        $implementor = new ConcreteImplementorB();
        $implementor->implementation();
    }
}
