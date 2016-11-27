<?php
namespace Strategy;

interface TaxCalculator
{
    public function getTaxAmount($price);
}