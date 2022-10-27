<?php

namespace App\Kata3;

use App\Kata1\CostInterface;
use App\Kata2\FreeShippingCalculator;
use App\Kata2\PriceCalculator;
use App\Kata2\PriceCalculatorInterface;

class FreeShippingDay
{

    private DiscountStrategy $discountStrategy;

    public function __construct(DiscountStrategy $discountStrategy)
    {
        $this->discountStrategy = $discountStrategy;
    }

    public function checkFreeShippingDay(bool $freeShippingDay)
    {

        if ($freeShippingDay = true) {

            return $this->discountStrategy->setFreeShippingDay();
        }
    }
}