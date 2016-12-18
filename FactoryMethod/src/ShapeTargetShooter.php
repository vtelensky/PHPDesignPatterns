<?php
namespace FactoryMethod;

abstract class ShapeTargetShooter
{
    /**
     * @param float $x
     * @param float $y
     */
    public function shootOnDefaultSizeTarget($x, $y)
    {
        $target = $this->createDefaultSizeInstance();

        if ($target->isHit($x, $y)) {
            echo (new \ReflectionClass($target))->getShortName() . " hit\n";
        } else {
            echo (new \ReflectionClass($target))->getShortName() . " missed\n";
        }
    }

    /** @return Target */
    public abstract function createDefaultSizeInstance();
}