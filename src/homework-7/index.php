<?php
require_once "BaseClass.php";
require_once "ParentClassTwoo.php";
require_once "ParentClass.php";



$baseObj = new BaseClass();
$baseObj->setBaseProperty(10);

$firstChildObj = new FirstChild();
$firstChildObj->setBaseProperty(5);
$firstChildObj->setChildProperty1(3);

$secondChildObj = new SecondChild();
$secondChildObj->setBaseProperty(8);
$secondChildObj->setChildProperty2(2);

$grandChild1Obj = new GrandChild1();
$grandChild1Obj->setBaseProperty(4);
$grandChild1Obj->setChildProperty1(2);

$grandChild2Obj = new GrandChild2();
$grandChild2Obj->setBaseProperty(6);
$grandChild2Obj->setChildProperty2(3);

echo "Base method result: " . $baseObj->baseMethod(5) . "<br/>";
echo "First child method 1 result: " . $firstChildObj->childMethod1(2) . "<br/>";
echo "First child method 2 result: " . $firstChildObj->childMethod2() . "<br/>";
echo "Second child method 1 result: " . $secondChildObj->childMethod1(3) . "<br/>";
echo "Second child method 2 result: " . $secondChildObj->childMethod2() . "<br/>";
echo "Grand child 1 method result: " . $grandChild1Obj->grandChildMethod() . "<br/>";
echo "Grand child 2 method result: " . $grandChild2Obj->grandChildMethod() . "<br/>";



$parent = new ParentClassTwoo(10);
$child1 = new Child1(10, 5);
$child2 = new Child2(10, 7);
$child3 = new Child3(3);

echo "Parent property: " . $parent->getParentProperty() . "<br/>";
echo "Child1 property: " . $child1->getChildProperty() . "<br/>";
echo "Child2 property: " . $child2->getChildProperty() . "<br/>";
echo "Child3 property: " . $child3->getChildProperty() . "<br/>";

$child1->setParentProperty(20);
echo "After setting parent property of Child1: " . $child1->getParentProperty() . "<br/>";

echo "Child1 multiply result: " . $child1->multiply() . "<br/>";
echo "Child2 add result: " . $child2->add() . "<br/>";
echo "Child3 subtract result: " . $child3->subtract(15) . "<br/>";