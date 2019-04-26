<?php

namespace App\entities;

class Home extends AbstractEntity implements Entity
{
    public function __construct(int $count)
    {
        $this->label = "Дома";
        parent::__construct($count);
    }
}