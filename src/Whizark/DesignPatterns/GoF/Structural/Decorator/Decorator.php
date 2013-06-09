<?php
namespace Whizark\DesignPatterns\GoF\Structural\Decorator;

use Whizark\DesignPatterns\GoF\Structural\Decorator\ComponentInterface;

/**
 * Class Decorator
 * @package Whizark\DesignPatterns\GoF\Structural\Decorator
 */
abstract class Decorator implements ComponentInterface
{
    /**
     * @var null|ComponentInterface
     */
    protected $component = null;

    /**
     * @param ComponentInterface $component
     */
    public function __construct(ComponentInterface $component)
    {
        $this->component = $component;
    }
}
