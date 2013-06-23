<?php
namespace Tests\Whizark\DesignPatterns\Uncategorized\MethodChaining;

use Whizark\DesignPatterns\Uncategorized\MethodChaining\ChainableClass;

/**
 * Class ChainableClassTest
 * @package Tests\Whizark\DesignPatterns\Uncategorized\MethodChaining
 */
class ChainableClassTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test doSomethingA().
     */
    public function testDoSomethingA()
    {
        $chainableObject = new ChainableClass();
        $result = $chainableObject->doSomethingA(1);
        $this->assertInstanceOf('Whizark\DesignPatterns\Uncategorized\MethodChaining\ChainableClass', $result);
    }

    /**
     * Test doSomethingB().
     */
    public function testDoSomethingB()
    {
        $chainableObject = new ChainableClass();
        $result = $chainableObject->doSomethingB(1);
        $this->assertInstanceOf('Whizark\DesignPatterns\Uncategorized\MethodChaining\ChainableClass', $result);
    }

    /**
     * Test doSomethingC().
     */
    public function testDoSomethingC()
    {
        $chainableObject = new ChainableClass();
        $result = $chainableObject->doSomethingC(1);
        $this->assertInstanceOf('Whizark\DesignPatterns\Uncategorized\MethodChaining\ChainableClass', $result);
    }

    /**
     * Test execute().
     */
    public function testExecute()
    {
        $chainableObject = new ChainableClass();
        $result = $chainableObject->execute();
        $this->assertSame(0, $result);
    }
}
