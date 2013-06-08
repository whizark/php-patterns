<?php
namespace Whizark\DesignPatterns\GoF\Structural\Composite;

use Whizark\DesignPatterns\GoF\Structural\Composite\Composite;
use Whizark\DesignPatterns\GoF\Structural\Composite\Leaf;

require '../../../../../../vendor/autoload.php';

$root           = new Composite();
$childLeaf      = new Leaf();
$childComposite = new Composite();
$grandchildLeaf = new Leaf();

$childComposite->add($grandchildLeaf);
$root->add($childLeaf);
$root->add($childComposite);

$root->doSomething();
