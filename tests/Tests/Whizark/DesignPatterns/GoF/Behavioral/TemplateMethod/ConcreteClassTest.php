<?php
namespace Tests\Whizark\DesignPatterns\GoF\Behavioral\TemplateMethod;

use Whizark\DesignPatterns\GoF\Behavioral\TemplateMethod\ConcreteClass;

/**
 * Class ConcreteClassTest
 * @package Tests\Whizark\DesignPatterns\GoF\Behavioral\TemplateMethod
 */
class ConcreteClassTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test templateMethod().
     */
    public function testTemplateMethod()
    {
        $concreteObject = new ConcreteClass();
        $concreteObject->templateMethod();
    }
}
