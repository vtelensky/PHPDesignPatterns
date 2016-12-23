<?php
namespace Behavioral\Strategy;

interface TaxCalculator
{
    public function getTaxAmount($price);
}