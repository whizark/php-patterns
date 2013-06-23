<?php
namespace Tests\Whizark\DesignPatterns\Uncategorized\MethodChaining;

use Whizark\DesignPatterns\Uncategorized\MethodChaining\ChainableClass;

/**
 * Class ClientTest
 * @package Tests\Whizark\DesignPatterns\Uncategorized\MethodChaining
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test an use case.
     */
    public function testAnUseCase()
    {
        $result = (new ChainableClass())->doSomethingA(1)
                                        ->doSomethingB(2)
                                        ->doSomethingC(3)
                                        ->execute();
        $this->assertSame(6, $result);
    }
}
