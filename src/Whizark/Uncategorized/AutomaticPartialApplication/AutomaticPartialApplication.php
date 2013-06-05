<?php
namespace Whizark\Uncategorized\AutomaticPartialApplication;

/**
 * Calculate the sum of three numbers.
 *
 * @param int $x
 * @param int $y
 * @param int $z
 * @return int
 */
function sum($x, $y, $z)
{
    return $x + $y + $z;
}

/**
 * A function factory for partial application.
 *
 * @param callable $function
 * @param int $arg1
 * @return callable
 */
function partial(callable $function, $arg1 /* , ... */)
{
    $args     = func_get_args();
    $function = array_shift($args);

    return function () use ($function, $args) {
        $args = array_merge($args, func_get_args());

        return call_user_func_array($function, $args);
    };
}

$addOne = partial(__NAMESPACE__ . '\\sum', 1);
$result = $addOne(2, 3);    // 6
