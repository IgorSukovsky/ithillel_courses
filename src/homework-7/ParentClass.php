<?php

namespace load;


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
//