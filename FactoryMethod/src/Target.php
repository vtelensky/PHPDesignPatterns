<?php
namespace FactoryMethod;

interface Target
{
    /**
     * @param float $x
     * @param float $y
     *
     * @return mixed
     */
    public function isHit($x, $y);
}