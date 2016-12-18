<?php
include __DIR__ . "/../vendor/autoload.php";

$circleTargetShooter = new \FactoryMethod\RectangleTargetShooter();
$circleTargetShooter->shootOnDefaultSizeTarget(1.0, 1.0);

$rectangleTargetShooter = new \FactoryMethod\RectangleTargetShooter();
$rectangleTargetShooter->shootOnDefaultSizeTarget(1.0, 1.0);

$smallRectangleTarget = \FactoryMethod\RectangleTargetShooter::createLargeRectangleTarget(1.0, 2.0);
var_dump($smallRectangleTarget);