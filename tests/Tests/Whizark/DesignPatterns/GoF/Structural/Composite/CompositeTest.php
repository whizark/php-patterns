<?php
namespace Tests\Whizark\DesignPatterns\GoF\Structural\Composite;

use Whizark\DesignPatterns\GoF\Structural\Composite\Composite;

/**
 * Class CompositeTest
 * @package Tests\Whizark\DesignPatterns\GoF\Structural\Composite
 */
class CompositeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Clean up object(s).
     */
    public function tearDown()
    {
        \Mockery::close();
    }

    /**
     * Test add().
     */
    public function testAdd()
    {
        $mockedLeaf = \Mockery::mock('Whizark\DesignPatterns\GoF\Structural\Composite\ComponentInterface');

        $composite = new Composite();
        $composite->add($mockedLeaf);
    }

    /**
     * Test remove().
     */
    public function testRemove()
    {
        $mockedLeaf = \Mockery::mock('Whizark\DesignPatterns\GoF\Structural\Composite\ComponentInterface');

        $composite = new Composite();
        $composite->remove($mockedLeaf);
    }

    /**
     * Test doSomething().
     */
    public function testDosomething()
    {
        $mockedLeaf = \Mockery::mock('Whizark\DesignPatterns\GoF\Structural\Composite\ComponentInterface');
        $mockedLeaf->shouldReceive('doSomething')
                   ->once();

        $composite = new Composite();
        $composite->add($mockedLeaf);
        $composite->doSomething();
    }
}
