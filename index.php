<?php

require __DIR__.'/vendor/autoload.php';
use Entity\ChildrenOfIluvatar;
use Entity\FileWrapper;
use Models\Wizard;
use Models\Hobbit;
use Models\Elf;
use Models\Man;
use Models\Dwarf;
use Models\Goblin;
use Models\Orc;
use Models\Trol;
use Models\Balrog;


$hobbit = new Hobbit();
$elf = new Elf();
$man = new Man();
$dwarf = new Dwarf();
$wizard = new Wizard();
$goblin = new Goblin();
$orc = new Orc();
$trol = new Trol();
$balrog = new Balrog();

$childrenOfIluvatar = new ChildrenOfIluvatar();
$childrenOfIluvatar->addWarriors($hobbit);
$childrenOfIluvatar->addWarriors($elf);
$childrenOfIluvatar->addWarriors($man);
$childrenOfIluvatar->addWarriors($dwarf);
$childrenOfIluvatar->addWarriors($wizard);
$childrenOfIluvatar->addWarriors($goblin);
$childrenOfIluvatar->addWarriors($orc);
$childrenOfIluvatar->addWarriors($trol);
$childrenOfIluvatar->addWarriors($balrog);

echo $childrenOfIluvatar->serialize();

$moriaFile = new FileWrapper('moria');
$moriaFile->writeToFile($childrenOfIluvatar->serialize());

