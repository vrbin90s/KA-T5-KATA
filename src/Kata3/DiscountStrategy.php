<?php

declare(strict_types=1);

namespace App\Kata3;


use App\Kata2\FreeShippingCalculator;
use App\Kata2\PriceCalculatorInterface;

class DiscountStrategy
{

    public function setFreeShippingDay(): float
    {
        $shippingCalculator = new FreeShippingCalculator();

        return $shippingCalculator->calculate(100,20,0);
    }

}
