<?php
namespace Whizark\Uncategorized\Currying;

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
 * A curried function factory.
 *
 * @param int $x
 * @return callable
 */
function curriedSum($x)
{
    return function ($y) use ($x) {
        return function ($z) use ($x, $y) {
            return sum($x, $y, $z);
        };
    };
}

$f1 = curriedSum(1);
$f2 = $f1(2);
$result = $f2(3);   // 6
