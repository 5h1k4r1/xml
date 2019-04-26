<?php

namespace App\entities;

class Bus extends AbstractEntity implements Entity
{
    public function __construct(int $count)
    {
        $this->label = "Автобусы";
        parent::__construct($count);
    }
}