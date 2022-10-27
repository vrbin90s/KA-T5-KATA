<?php

namespace App\Kata4;

interface ShippingStrategy
{
    public function ourCost(): float;
}