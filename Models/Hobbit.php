<?php

namespace Models;

use Traits\WarriorStats;

class Hobbit
{
    use WarriorStats;

    public function __construct()
    {
        $this->strength = $this->randomStatsValue();
        $this->charisma = $this->randomStatsValue();
        $this->intelligence = $this->randomStatsValue();
    }
}