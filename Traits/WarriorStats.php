<?php

namespace Traits;

trait WarriorStats
{
    private float $strength;

    private float $intelligence;

    private float $charisma;

    private float $fightPower;

    /**
     * @return float
     */
    public function getStrength(): float
    {
        return $this->strength;
    }

    /**
     * @return float
     */
    public function getIntelligence(): float
    {
        return $this->intelligence;
    }

    /**
     * @return float
     */
    public function getCharisma(): float
    {
        return $this->charisma;
    }

    /**
     * @return float
     */
    public function getFightPower(): float
    {
        return $this->fightPower;
    }


    public function randomStatsValue(): float
    {
        return number_format((float)mt_rand() / (float)mt_getrandmax(), 2);
    }


}