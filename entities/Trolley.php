<?php

namespace App\entities;

class Trolley extends AbstractEntity implements Entity
{
    public function __construct(int $count)
    {
        $this->label = "Троллейбусы";
        parent::__construct($count);
    }
}