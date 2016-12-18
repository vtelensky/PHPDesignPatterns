<?php
include __DIR__ . "/../vendor/autoload.php";

$circleTargetShooter = new \FactoryMethod\CircleTargetShooter();
$circleTargetShooter->shootOnDefaultSizeTarget(3.5, 3.5);

$rectangleTargetShooter = new \FactoryMethod\RectangleTargetShooter();
$rectangleTargetShooter->shootOnDefaultSizeTarget(2.1, 0.5);

$smallRectangleTarget = \FactoryMethod\RectangleTargetShooter::createSmallRectangleTarget(1.0, 1.0);

// Just some basic test of hitting small rectangle
var_dump(
    $smallRectangleTarget->isHit(1, 1),
    $smallRectangleTarget->isHit(1.5, 1.5),
    $smallRectangleTarget->isHit(2, 1),
    $smallRectangleTarget->isHit(2.1, 0.5)
);