<?php

use Lucas\NamespaceExample\Application\ApplicationFactory;

require __DIR__ . "/../vendor/autoload.php";

$application = ApplicationFactory::make();
$application->run();
