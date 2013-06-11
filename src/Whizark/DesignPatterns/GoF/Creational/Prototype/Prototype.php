<?php
namespace Whizark\DesignPatterns\GoF\Creational\Prototype;

use Whizark\DesignPatterns\GoF\Creational\Prototype\PrototypeInterface;

/**
 * Class ConcretePrototype
 * @package Whizark\DesignPatterns\GoF\Creational\Prototype
 */
class Prototype implements PrototypeInterface
{
    /**
     * {@inheritDoc}
     */
    public function __clone()
    {
        // Make some changes in the cloned object if needed.
        //
        // For instance, perform a deep copy.
        // Note that the example code below recursively clone serializable object(s).
        // So if this class has a static propety like unserializable Singleton
        // and it has the refecence to an object,
        // the cloned object won't be identical with the original.
        foreach ($this as $key => $value) {
            $type = gettype($value);

            if ($type === 'object' || $type === 'array') {
                $this->{$key} = unserialize(serialize($value));
            }
        }
    }
}
