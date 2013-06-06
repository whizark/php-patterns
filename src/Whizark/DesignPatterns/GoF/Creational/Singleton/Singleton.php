<?php
namespace Whizark\DesignPatterns\GoF\Creational\Singleton;

/**
 * Class Singleton
 * @package Whizark\DesignPatterns\GoF\Creational\Singleton
 */
class Singleton
{
    /**
     * @var array
     */
    private static $instances = [];

    /**
     * Prevent direct instantiation.
     */
    private function __construct()
    {
    }

    /**
     * Get the instance of this class.
     *
     * @return mixed
     */
    final public static function getInstance()
    {
        $classname = get_called_class();

        if (! isset(self::$instances[$classname])) {
            self::$instances[$classname] = new static();
        }

        return self::$instances[$classname];
    }

    /**
     * Prevent cloning.
     *
     * @throws \RuntimeException
     */
    final public function __clone()
    {
        throw new \RuntimeException('Clone is not allowed for ' . get_class($this));
    }
}
