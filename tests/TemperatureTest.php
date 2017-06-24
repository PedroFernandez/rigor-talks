<?php

use RigorTalks\Temperature;
use RigorTalks\TemperatureTestClass;
use RigorTalks\ColdThresholdSource;

class TemperatureTest extends \PHPUnit\Framework\TestCase implements ColdThresholdSource
{
    /**
     * @test
     * @expectedException \RigorTalks\TemperatureNegativeException
     */
    public function negativeTemperatureCanBeSet()
    {
        Temperature::take(-1);
    }

    /** @test */
    public function positiveTemperatureCanBeSet()
    {
        $measure = 12;

        $this->assertEquals(
            $measure,
            (Temperature::take($measure))->measure()
        );
    }

    /** @test */
    public function positiveTemperatureCanBeSetWithANamedConstructor()
    {
        $measure = 12;

        $this->assertEquals(
            $measure,
            (Temperature::take($measure))->measure()
        );
    }

    /** @test */
    public function checkThatSuperHotTemperatureIsSuperHot()
    {
        $this->assertTrue(
            TemperatureTestClass::take(100)->isSuperHot()
        );
    }

    /** @test */
    public function checkThatSuperColdTemperatureIsSuperCold()
    {
        $this->assertTrue(
            Temperature::take(10)->isSuperCold(
                $this
            )
        );
    }

    /** @test */
    public function checkThatSuperColdTemperatureIsSuperColdWithAnonymousClass()
    {
        $this->assertTrue(
            Temperature::take(10)->isSuperCold(
                new class implements ColdThresholdSource{
                    public function getThreshold()
                    {
                        return 50;
                    }

                }
            )
        );
    }

    /** @test */
    public function checkThatTemperatureCanBeCreatedFromStation()
    {
        $this->assertSame(
            100,
            Temperature::fromStation(
                $this
            )->measure()
        );
    }

    public function sensor()
    {
        return $this;
    }

    public function temperature()
    {
        return $this;
    }

    public function measure()
    {
        return 100;
    }

    public function getThreshold()
    {
        return 50;
    }
}