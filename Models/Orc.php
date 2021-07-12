<?php

namespace Models;

use Traits\WarriorStats;

class Orc
{
    use WarriorStats;

    private float $supernatural;

    public function __construct()
    {
        $this->strength = $this->randomStatsValue();
        $this->charisma = $this->randomStatsValue();
        $this->intelligence = $this->randomStatsValue();
        $this->supernatural = $this->randomStatsValue();
        $this->fightPower = $this->calculateFightPower();
    }

    /**
     * @return float
     */
    public function getSupernatural(): float
    {
        return $this->supernatural;
    }

    public function calculateFightPower(): float
    {
        return 30 * $this->strength + 10 * $this->intelligence + 1 * $this->charisma + 5 * $this->supernatural;
    }
}