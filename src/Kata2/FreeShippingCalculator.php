<?php

declare(strict_types=1);

namespace App\Kata2;

use App\Kata1\Discount;
use App\Kata1\Price;
use App\Kata1\Shipping;

class FreeShippingCalculator implements PriceCalculatorInterface
{

    public function calculate(float $price, float $discount, float $shipping = null): float|int
    {
        return (new Discount($discount, new Price($price)))->cost();
    }
}
