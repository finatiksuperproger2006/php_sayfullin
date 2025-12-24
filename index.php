<?php

require 'vendor/autoload.php';

use App\MagicClass;
use App\Point;
use App\Vector;

$obj = new MagicClass();
$obj->someMethod();
MagicClass::staticMethod();
$value = $obj->prop;
$obj->prop = 42;
isset($obj->prop);
unset($obj->prop);
$obj();
$str = (string)$obj;
$clone = clone $obj;
var_dump($obj);
$ser = serialize($obj);
$unser = unserialize($ser);

$t1 = new Point(2, 3);
$v1 = new Vector(3, 4);
$v2 = new Vector(0, 0);
$v3 = new Vector(-4, 3);

echo $v1->length() . "\n";
echo $v2->length() . "\n";
echo $v3->length() . "\n";

var_dump($v1->isPerpendicularTo($v3));

$t1->move($v1->x, $v1->y);
