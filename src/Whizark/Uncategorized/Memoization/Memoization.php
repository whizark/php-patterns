<?php
namespace Whizark\Uncategorized\Memoization;

/**
 * A memoized function.
 *
 * @param mixed $arg1
 * @return mixed
 */
function memoizedFunction($arg1 /* , ... */)
{
    static $cache = [];

    $args = func_get_args();
    $key  = sha1(serialize($args));

    if (! array_key_exists($key, $cache)) {
        $result = null; // Do something.

        $cache[$key] = $result;
    }

    return $cache[$key];
}

$result1 = memoizedFunction(1);
$result2 = memoizedFunction(1); // The remembered result is returned.
