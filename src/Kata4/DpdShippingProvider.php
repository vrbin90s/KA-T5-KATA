<?php

declare(strict_types=1);

namespace App\Kata4;

use App\Kata2\PriceCalculator;


class DpdShippingProvider implements ShippingStrategy
{
    private PriceCalculator $priceCalculator;

    public function __construct(PriceCalculator $priceCalculator)
    {
        $this->priceCalculator = $priceCalculator;
    }

    public function ourCost(): float
    {
        return $this->priceCalculator->calculate(100,20,4);
    }
}
