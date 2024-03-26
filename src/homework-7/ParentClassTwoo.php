<?php


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


