<?php

declare(strict_types=1);

namespace App\Kata1;

class Discount implements CostInterface
{
    private float $discount;
    private CostInterface $baseCost;

    public function __construct(float $discount, CostInterface $baseCost)
    {
        $this->discount = $discount;
        $this->baseCost = $baseCost;
    }

    public function cost(): float|int
    {
        return $this->baseCost->cost() * (1 - ($this->discount / 100));
    }
}
