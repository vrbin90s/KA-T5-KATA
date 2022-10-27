<?php

declare(strict_types=1);

namespace App;

use App\Kata1\Discount;
use App\Kata1\Price;
use App\Kata1\Shipping;
use App\Kata2\PriceCalculator;
use App\Kata2\PriceCalculatorInterface;
use App\Kata3\DiscountStrategy;
use App\Kata4\DpdShippingProvider;
use App\Kata3\FreeShippingDay;

class DemoRun
{
    private bool $isTuesday = false;

    public function kata1(): float
    {
        // shipping = 8;
        // discount = 20;
        // new Price(100);

        //change me!!!
        $finalPrice = new Shipping(8,new Discount(20,new Price(100)));
        return $finalPrice->cost();
    }

    public function kata2(PriceCalculatorInterface $calculator)
    {
        // shipping = 8;
        // discount = 20;
        // new Price(100);

        //oh, no! what a crap, change me now!
        return $calculator->calculate(100, 20, 8);
    }

    public function kata3(): float
    {
        // shipping = 8;
        // discount = 20;
        // new Price(100);

        //OMG ¯\_(ツ)_/¯ , don't be lazy, change me

        $checkCurrentDay = new FreeShippingDay(new DiscountStrategy());

        return $checkCurrentDay->checkFreeShippingDay($this->isTuesday);
    }

    public function kata4(): float
    {
        // shipping = 8;
        // discount = 20;
        // new Price(100);

        //OMG ¯\_(ツ)_/¯ , don't be lazy, change me

        $shippingCost = new DpdShippingProvider(new PriceCalculator());

        return $shippingCost->ourCost();
    }

    /**
     * @return bool
     */
    public function isTuesday(): bool
    {
        return $this->isTuesday;
    }

    /**
     * @param bool $isTuesday
     */
    public function setIsTuesday(bool $isTuesday): void
    {
        $this->isTuesday = $isTuesday;
    }
}
