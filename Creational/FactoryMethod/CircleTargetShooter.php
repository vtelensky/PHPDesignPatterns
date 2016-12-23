<?php
namespace Creational\FactoryMethod;

class CircleTargetShooter
extends ShapeTargetShooter
{
    /**
     * @return CircleTarget
     */
    public function createDefaultSizeInstance()
    {
        return new CircleTarget(5.0, 5.0, 2.0);
    }

    /**
     * @param float $x
     * @param float $y
     *
     * @return CircleTarget
     */
    public static function createSmallCircleTarget($x, $y)
    {
        return new CircleTarget($x, $y, 1.0);
    }

    /**
     * @param float $x
     * @param float $y
     *
     * @return CircleTarget
     */
    public static function createMediumCircleTarget($x, $y)
    {
        return new CircleTarget($x, $y, 2.0);
    }

    /**
     * @param float $x
     * @param float $y
     *
     * @return CircleTarget
     */
    public static function createLargeCircleTarget($x, $y)
    {
        return new CircleTarget($x, $y, 3.0);
    }
}