<?php
namespace Tests\Whizark\DesignPatterns\GoF\Behavioral\TemplateMethod;

/**
 * Class AbstractClassTest
 * @package Tests\Whizark\DesignPatterns\GoF\Behavioral\TemplateMethod
 */
class AbstractClassTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Clean up object(s).
     */
    public function tearDown()
    {
        \Mockery::close();
    }

    /**
     * Test templaTemethod().
     */
    public function testTemplateMethod()
    {
        $mockedAbstractObject = \Mockery::mock('Whizark\DesignPatterns\GoF\Behavioral\TemplateMethod\AbstractClass[doSomethingA, doSomethingB]');
        $mockedAbstractObject->templateMethod();
    }
}
