<?php

namespace Entity;

use Traits\WarriorStats;

class ChildrenOfIluvatar
{

    private array $iluvatarChildren;

    public function __construct()
    {
        $this->iluvatarChildren = [];
    }

    public function addWarriors($warrior)
    {
        $this->iluvatarChildren[] = $warrior;
    }

    public function serialize(): string
    {
        return serialize($this->iluvatarChildren);
    }

    public function unserialize(string $data): array
    {
        return unserialize($data);
    }


}