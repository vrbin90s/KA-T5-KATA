<?php

declare(strict_types=1);

namespace Test\Unit;

use App\DemoRun;
use App\Kata2\FreeShippingCalculator;
use App\Kata2\PriceCalculator;

class DemoRunTest extends \PHPUnit\Framework\TestCase
{
    protected DemoRun $runner;

    public function setUp(): void
    {
        $this->runner = new DemoRun();
    }

    public function testKata1(): void
    {
        $this->assertEquals(88, $this->runner->kata1());
    }

    public function testKata2(): void
    {
        $this->assertEquals(88, $this->runner->kata2(new PriceCalculator()));
        $this->assertEquals(80, $this->runner->kata2(new FreeShippingCalculator()));
    }

    public function testKata3(): void
    {
        $this->runner->setIsTuesday(true);
        $this->assertEquals(80, $this->runner->kata3());
    }

    public function testKata4(): void
    {
        $this->assertEquals(84, $this->runner->kata4());
    }
}
