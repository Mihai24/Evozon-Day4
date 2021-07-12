<?php


namespace BattleOfMoria\Services;
use BattleOfMoria\Traits\WarriorStats;

class ChildrenOfIluvatar
{
    use WarriorStats;

    public function __construct(float $strength, float $intelligence, float $charisma, float $fightPower)
    {
        $this->strength = $strength;
        $this->intelligence = $intelligence;
        $this->charisma = $charisma;
        $this->fightPower = $fightPower;
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
    public function getStrength(): float
    {
        return $this->strength;
    }
}