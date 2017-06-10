<?php

namespace RigorTalks;

class TemperatureNegativeException extends \Exception {}

class Temperature
{
    private $measure;

    private function __construct(int $measure)
    {
        $this->setMeasure($measure);
    }

    /**
     * @param int $measure
     */
    private function setMeasure(int $measure)
    {
        $this->checkThatTemperatureIsValid($measure);
        $this->measure = $measure;
    }

    /**
     * @param int $measure
     * @throws TemperatureNegativeException
     */
    private function checkThatTemperatureIsValid(int $measure)
    {
        if ($measure < 0) {
            throw new TemperatureNegativeException("Measure should be positive");
        }
    }

    public static function take(int $measure)
    {
        return new Temperature($measure);
    }

    public function measure(): int
    {
        return $this->measure;
    }
}