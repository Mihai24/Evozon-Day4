<?php

namespace Models;

use Traits\WarriorStats;

class Trol
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
        return 50 * $this->strength + 1 * $this->intelligence + 1 * $this->charisma + 10 * $this->supernatural;
    }
}