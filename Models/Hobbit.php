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
        $this->fightPower = $this->calculateFightPower();
    }

    public function calculateFightPower(): float
    {
        return 10 * $this->strength + 20 * $this->intelligence + 20 * $this->charisma;
    }
}