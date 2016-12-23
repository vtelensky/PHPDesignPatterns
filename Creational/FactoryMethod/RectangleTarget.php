<?php
namespace Creational\FactoryMethod;

class RectangleTarget
implements Target
{

    /**
     * X coordinate of left down corner of Rectangle
     * @var float
     */
    private $x;

    /**
     * Y coordinate of left down corner of Rectangle
     * @var float
     */
    private $y;

    /**
     * Side length of rectangle
     * @var float
     */
    private $sideLength;


    public function __construct($x, $y, $sideLength)
    {
        $this->x = $x;
        $this->y = $y;
        $this->sideLength = $sideLength;
    }

    /**
     * @param float $x
     * @param float $y
     *
     * @return mixed
     */
    public function isHit($x, $y)
    {
        if (($x >= $this->x && $x <= $this->x + $this->sideLength)
            && ($y >= $this->y && $y <= $this->y + $this->sideLength)
        ) {
            return true;
        }

        return false;
    }
}