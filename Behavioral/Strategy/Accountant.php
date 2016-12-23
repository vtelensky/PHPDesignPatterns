<?php
namespace Behavioral\Strategy;

class Accountant
{
    /** @var TaxCalculator */
    private $calculator;

    public function __construct(TaxCalculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function setCalculator(TaxCalculator $calculator)
    {
        $this->calculator = $calculator;
    }

    /**
     * @param $price
     *
     * @return float
     */
    public function getPriceWithTax($price)
    {
        return (float)$price + $this->calculator->getTaxAmount($price);
    }

    /**
     * @param $price
     *
     * @return float
     */
    public function getTaxAmount($price)
    {
        return (float)$this->calculator->getTaxAmount($price);
    }
}