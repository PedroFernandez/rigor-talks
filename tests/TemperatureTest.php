<?php

use RigorTalks\Temperature;

class TemperatureTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @expectedException \RigorTalks\TemperatureNegativeException
     */
    public function negativeTemperatureCanBeSet()
    {
        new Temperature(-1);
    }

    /** @test */
    public function positiveTemperatureCanBeSet()
    {
        $measure = 12;

        $this->assertEquals(
            $measure,
            (new Temperature($measure))->measure()
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
}