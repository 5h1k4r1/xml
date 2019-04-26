<?php

namespace App\entities;

class Street extends AbstractEntity implements Entity
{
    public function __construct(int $count)
    {
        $this->label = "Улицы";
        parent::__construct($count);
    }
}