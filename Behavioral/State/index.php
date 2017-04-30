<?php
include __DIR__ . "/../../vendor/autoload.php";

$robot = new \Behavioral\State\Robot(
    new \Behavioral\State\Work()
);

for ($i = 0; $i < 3; $i++) {
    $robot->doActionAccordingInternalState();
}

$robot->setState(
    new \Behavioral\State\Shutdown()
);
$robot->doActionAccordingInternalState();