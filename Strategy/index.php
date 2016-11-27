<?php
include __DIR__ . "/../vendor/autoload.php";

$standardRateCalculator = new Strategy\StandardRateTaxCalculator();
$reducedRateCalculator  = new Strategy\ReducedTaxCalculator();

$accountant = new Strategy\Accountant($standardRateCalculator);

$prices = array(100, 200, 300, 400);

echo "Counting prices with standard tax rate" . PHP_EOL . PHP_EOL;

foreach ($prices as $price) {
    echo "---------------------------------------" . PHP_EOL;
    echo "Price withou tax: " . $price . PHP_EOL;
    echo "Tax for price: " . $price . " is " . $accountant->getTaxAmount($price) . PHP_EOL;
    echo "Price with tax is " . $accountant->getPriceWithTax($price) . PHP_EOL;
    echo "---------------------------------------" . PHP_EOL . PHP_EOL;
}

$accountant->setCalculator($reducedRateCalculator);

echo "Counting prices with reduced tax rate" . PHP_EOL . PHP_EOL;

foreach ($prices as $price) {
    echo "---------------------------------------" . PHP_EOL;
    echo "Price withou tax: " . $price . PHP_EOL;
    echo "Tax for price: " . $price . " is " . $accountant->getTaxAmount($price) . PHP_EOL;
    echo "Price with tax is " . $accountant->getPriceWithTax($price) . PHP_EOL;
    echo "---------------------------------------" . PHP_EOL . PHP_EOL;
}
