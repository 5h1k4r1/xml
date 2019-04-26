<?php

namespace App\entities;

abstract class AbstractEntity
{
    protected $count;
    protected $label;

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function setCount(int $count)
    {
        $this->count = $count;
    }

    public function __construct(int $count)
    {
        $this->count = $count;
    }
}