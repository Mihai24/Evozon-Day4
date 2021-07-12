<?php

namespace Models;

use Traits\WarriorStats;

class Wizard
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
        return 20 * $this->strength + 30 * $this->intelligence + 5 * $this->charisma + 20 * $this->supernatural;
    }
}