<?php

namespace App\Kata4;

use App\Kata2\PriceCalculator;

class StandardShippingProvider implements ShippingStrategy
{

    /* This class is not used for this assignment
    but this is how I imagine we could introduce both shipping providers
    that provide different shipping costs
    */
    private PriceCalculator $priceCalculator;

    public function __construct(PriceCalculator $priceCalculator)
    {
        $this->priceCalculator = $priceCalculator;
    }

    public function ourCost(): float
    {
        return $this->priceCalculator->calculate(100,20,8);
    }
}