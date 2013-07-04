<?php
namespace Tests\Whizark\DesignPatterns\GoF\Structural\Composite;

use Whizark\DesignPatterns\GoF\Structural\Composite\Leaf;

/**
 * Class LeafTest
 * @package Tests\Whizark\DesignPatterns\GoF\Structural\Composite
 */
class LeafTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test doSomething().
     */
    public function testDoSomething()
    {
        $leaf = new Leaf();
        $leaf->doSomething();
    }
}
