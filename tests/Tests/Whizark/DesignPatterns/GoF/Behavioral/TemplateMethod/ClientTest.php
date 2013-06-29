<?php
namespace Tests\Whizark\DesignPatterns\GoF\Behavioral\TemplateMethod;

use Whizark\DesignPatterns\GoF\Behavioral\TemplateMethod\ConcreteClass;

/**
 * Class ClientTest
 * @package Tests\Whizark\DesignPatterns\GoF\Behavioral\TemplateMethod
 */
class ClientTest extends \PHPUnit_Framework_TestCase
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
