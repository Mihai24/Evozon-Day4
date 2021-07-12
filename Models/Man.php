<?php

namespace Models;

use Traits\WarriorStats;

class Man
{
    use WarriorStats;

    public function __construct()
    {
        $this->strength = $this->randomStatsValue();
        $this->charisma = $this->randomStatsValue();
        $this->intelligence = $this->randomStatsValue();
    }
}