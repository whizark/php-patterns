<?php
namespace Whizark\Uncategorized\PartialApplication;

/**
 * Add two numbers.
 *
 * @param int $x
 * @param int $y
 * @return int
 */
function add($x, $y)
{
    return $x + $y;
}

/**
 * A function factory for partial application.
 *
 * @param int $x
 * @return callable
 */
function makeAdder($x)
{
    return function ($y) use ($x) {
        return add($x, $y);
    };
}

$addOne = makeAdder(1);
$result = $addOne(1);   // 2
