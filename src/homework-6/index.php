<?php
// 1) Создать родительский (главный класс)
// - Класс должен содержать 2 свойства
// - Каждое свойство должно иметь геттеры и сеттеры
// - должен содержать абстрактную функцию возведения в степень
//
//

abstract class ParentClass
{
    protected float $number;
    protected int $power;

    public function getNumber(): float
    {
        return $this->number;
    }

    public function setNumber(float $number): void
    {
        $this->number = $number;
    }

    public function getPower(): int
    {
        return $this->power;
    }

    public function setPower(int $power): void
    {
        $this->power = $power;
    }

    abstract public function powerUp(): float;
}

//2) Создать 3 наследника родительского класса
//Каждый наследник должен содержать одно свойство
//Каждое свойство должно иметь геттер и сеттер
//Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
//Один наследник не должен быть наследуемым
//

// Родительский класс
class ParentClassTwoo
{
    protected int $parentProperty;

    public function __construct(int $value)
    {
        $this->parentProperty = $value;
    }

    public function getParentProperty(): int
    {
        return $this->parentProperty;
    }

    public function setParentProperty(int $value): void
    {
        $this->parentProperty = $value;
    }
}

// Первый наследник
class Child1 extends ParentClassTwoo
{
    protected int $childProperty;

    public function __construct(int $parentValue, int $childValue)
    {
        parent::__construct($parentValue);
        $this->childProperty = $childValue;
    }

    public function getChildProperty(): int
    {
        return $this->childProperty;
    }

    public function setChildProperty(int $value): void
    {
        $this->childProperty = $value;
    }

    public function multiply(): int
    {
        return $this->parentProperty * $this->childProperty;
    }
}

// Второй наследник
class Child2 extends ParentClassTwoo
{
    protected int $childProperty;

    public function __construct(int $parentValue, int $childValue)
    {
        parent::__construct($parentValue);
        $this->childProperty = $childValue;
    }

    public function getChildProperty(): int
    {
        return $this->childProperty;
    }

    public function setChildProperty(int $value): void
    {
        $this->childProperty = $value;
    }

    public function add(): int
    {
        return $this->parentProperty + $this->childProperty;
    }
}

// Третий наследник
final class Child3
{
    private int $childProperty;

    public function __construct(int $childValue)
    {
        $this->childProperty = $childValue;
    }

    public function getChildProperty(): int
    {
        return $this->childProperty;
    }

    public function setChildProperty(int $value): void
    {
        $this->childProperty = $value;
    }

    public function subtract(int $parentValue): int
    {
        return $parentValue - $this->childProperty;
    }
}

$parent = new ParentClassTwoo(10);
$child1 = new Child1(10, 5);
$child2 = new Child2(10, 7);
$child3 = new Child3(3);

echo "Parent property: " . $parent->getParentProperty() . "\n";
echo "Child1 property: " . $child1->getChildProperty() . "\n";
echo "Child2 property: " . $child2->getChildProperty() . "\n";
echo "Child3 property: " . $child3->getChildProperty() . "\n";

$child1->setParentProperty(20);
echo "After setting parent property of Child1: " . $child1->getParentProperty() . "\n";

echo "Child1 multiply result: " . $child1->multiply() . "\n";
echo "Child2 add result: " . $child2->add() . "\n";
echo "Child3 subtract result: " . $child3->subtract(15) . "\n";


//3) Создать по 2 наследника от наследников первого уровня
//Каждое свойство должно иметь геттер и сеттер
//Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
//И по одному методу который выполняет любое математическое действие со свойством корневого класса и своим свойством
//В случае если реализован наследник класса содержащего абстрактную функцию то класс должен содержать реализацию абстракции
//

// Базовый класс
class BaseClass
{
    private $baseProperty;

    public function getBaseProperty()
    {
        return $this->baseProperty;
    }

    public function setBaseProperty($value)
    {
        $this->baseProperty = $value;
    }

    public function baseMethod($value)
    {
        return $value * 2;
    }
}

// Первый уровень наследников
class FirstChild extends BaseClass
{
    private $childProperty1;

    public function getChildProperty1()
    {
        return $this->childProperty1;
    }

    public function setChildProperty1($value)
    {
        $this->childProperty1 = $value;
    }

    public function childMethod1($value)
    {
        return $this->getBaseProperty() + $value;
    }

    public function childMethod2()
    {
        return sqrt($this->getBaseProperty() * $this->childProperty1);
    }
}

class SecondChild extends BaseClass
{
    private $childProperty2;

    public function getChildProperty2()
    {
        return $this->childProperty2;
    }

    public function setChildProperty2($value)
    {
        $this->childProperty2 = $value;
    }

    public function childMethod1($value)
    {
        return $this->getBaseProperty() - $value;
    }

    public function childMethod2()
    {
        return $this->getBaseProperty() / $this->childProperty2;
    }
}

// Второй уровень наследников
class GrandChild1 extends FirstChild
{
    public function grandChildMethod()
    {
        return $this->getChildProperty1() * $this->getBaseProperty();
    }
}

class GrandChild2 extends SecondChild
{
    public function grandChildMethod()
    {
        return $this->getChildProperty2() / $this->getBaseProperty();
    }
}

// Пример использования
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

echo "Base method result: " . $baseObj->baseMethod(5) . "\n";
echo "First child method 1 result: " . $firstChildObj->childMethod1(2) . "\n";
echo "First child method 2 result: " . $firstChildObj->childMethod2() . "\n";
echo "Second child method 1 result: " . $secondChildObj->childMethod1(3) . "\n";
echo "Second child method 2 result: " . $secondChildObj->childMethod2() . "\n";
echo "Grand child 1 method result: " . $grandChild1Obj->grandChildMethod() . "\n";
echo "Grand child 2 method result: " . $grandChild2Obj->grandChildMethod() . "\n";




