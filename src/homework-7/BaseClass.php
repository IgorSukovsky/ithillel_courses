<?php


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

///////// Первый уровень наследников
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

