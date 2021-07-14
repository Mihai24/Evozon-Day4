<?php


namespace Entity;


class GenerateArmies
{
    private string $goodArmy;

    private string $evilArmy;

    public function __construct()
    {
        $this->goodArmy = [];
        $this->evilArmy = [];
    }
}