<?php

namespace RigorTalks;

class TemperatureNegativeException extends \Exception {}

class Temperature
{
    private $measure;

    public function __construct(int $measure)
    {
        $this->checkThatTemperatureIsValid($measure);
        $this->measure = $measure;
    }

    public function measure(): int
    {
        return $this->measure;
    }

    /**
     * @param int $measure
     * @throws TemperatureNegativeException
     */
    public function checkThatTemperatureIsValid(int $measure): void
    {
        if ($measure < 0) {
            throw new TemperatureNegativeException("Measure should be positive");
        }
    }
}