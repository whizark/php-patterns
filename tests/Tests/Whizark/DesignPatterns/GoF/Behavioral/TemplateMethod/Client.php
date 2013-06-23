<?php
namespace Tests\Whizark\DesignPatterns\GoF\Behavioral\TemplateMethod;

use Whizark\DesignPatterns\GoF\Behavioral\TemplateMethod\ConcreteClass;

/**
 * Class ClientClassTest
 * @package Tests\Whizark\DesignPatterns\GoF\Behavioral\TemplateMethod
 */
class ClientClassTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test an use case.
     */
    public function testAnUseCase()
    {
        $concreteObject = new ConcreteClass();
        $concreteObject->templateMethod();
    }
}
