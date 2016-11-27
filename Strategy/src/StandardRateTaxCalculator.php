<?php
namespace Strategy;

class StandardRateTaxCalculator
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

        return (float)$price * TaxRates::STANDARD_TAX_RATE;
    }
}
