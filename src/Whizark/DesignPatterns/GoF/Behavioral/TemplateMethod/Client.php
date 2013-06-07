<?php
namespace Whizark\DesignPatterns\GoF\Behavioral\TemplateMethod;

use Whizark\DesignPatterns\GoF\Behavioral\TemplateMethod\ConcreteClass;

require '../../../../../../vendor/autoload.php';

$instance = new ConcreteClass();
$instance->templateMethod();
