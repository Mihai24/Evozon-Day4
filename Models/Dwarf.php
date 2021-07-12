<?php

namespace Models;

use Traits\WarriorStats;

class Dwarf
{
    use WarriorStats;

    public function __construct()
    {
        $this->strength = $this->randomStatsValue();
        $this->charisma = $this->randomStatsValue();
        $this->intelligence = $this->randomStatsValue();
        $this->fightPower = $this->calculateFightPower();
    }

    public function calculateFightPower(): float
    {
        return 40 * $this->strength + 30 * $this->intelligence + 10 * $this->charisma;
    }
}