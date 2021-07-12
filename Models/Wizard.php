<?php

namespace Models;

use Traits\WarriorStats;

class Wizard
{
    use WarriorStats;

    private float $supernatural;

    /**
     * @return float
     */
    public function getSupernatural(): float
    {
        return $this->supernatural;
    }

    public function __construct()
    {
        $this->strength = $this->randomStatsValue();
        $this->charisma = $this->randomStatsValue();
        $this->intelligence = $this->randomStatsValue();
    }
}