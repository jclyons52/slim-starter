<?php

require '../vendor/autoload.php';

$kernel = new \Starter\Kernel();

$kernel->boot();

$kernel->run();