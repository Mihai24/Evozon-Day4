<?php

require __DIR__.'/vendor/autoload.php';
use Models\Wizard;


$wizard = new Wizard();
echo $wizard->getFightPower();
