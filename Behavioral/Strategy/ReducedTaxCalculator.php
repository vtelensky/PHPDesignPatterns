<?php
namespace Behavioral\Strategy;

class ReducedTaxCalculator
    implements TaxCalculator
{
    /**
     * @param $price
     *
     * @throws \InvalidArgumentException
     * @return float
     */
    public function getTaxAmount($price)
    {
        if (!is_numeric($price)) {
            throw new \InvalidArgumentException('$price is not a number');
        }

        return (float)$price * TaxRates::REDUCED_TAX_RATE;
    }
}