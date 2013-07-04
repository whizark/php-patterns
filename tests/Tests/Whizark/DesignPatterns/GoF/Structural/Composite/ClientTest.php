<?php
namespace Tests\Whizark\DesignPatterns\GoF\Structural\Composite;

use Whizark\DesignPatterns\GoF\Structural\Composite\Composite;
use Whizark\DesignPatterns\GoF\Structural\Composite\Leaf;

/**
 * Class ClientTest
 * @package Tests\Whizark\DesignPatterns\GoF\Structural\Composite
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test an use case.
     */
    public function testAnUseCase()
    {
        $root           = new Composite();
        $childLeaf      = new Leaf();
        $childComposite = new Composite();
        $grandchildLeaf = new Leaf();

        $childComposite->add($grandchildLeaf);
        $root->add($childLeaf);
        $root->add($childComposite);

        $root->doSomething();
    }
}
