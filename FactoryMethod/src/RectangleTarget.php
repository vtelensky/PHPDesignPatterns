<?php
namespace FactoryMethod;

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
        return true;
    }
}