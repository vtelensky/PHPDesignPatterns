<?php
namespace FactoryMethod;

class RectangleTargetShooter
extends ShapeTargetShooter
{

    /**
     * @return RectangleTarget
     */
    public function createDefaultSizeInstance()
    {
        return new RectangleTarget(1.0, 1.0, 2.0);
    }

    /**
     * @param float $x
     * @param float $y
     *
     * @return RectangleTarget
     */
    public static function createSmallRectangleTarget($x, $y)
    {
        return new RectangleTarget($x, $y, 1.0);
    }

    /**
     * @param float $x
     * @param float $y
     *
     * @return RectangleTarget
     */
    public static function createMediumRectangleTarget($x, $y)
    {
        return new RectangleTarget($x, $y, 2.0);
    }

    /**
     * @param float $x
     * @param float $y
     *
     * @return RectangleTarget
     */
    public static function createLargeRectangleTarget($x, $y)
    {
        return new RectangleTarget($x, $y, 3.0);
    }
}