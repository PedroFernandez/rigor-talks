<?php

namespace RigorTalks;

class TemperatureNegativeException extends \Exception
{
    public static function fromMeasure(int $measure)
    {
        return new static (
            sprintf('Measure $d should be positive', $measure)
        );
    }
}

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
            throw TemperatureNegativeException::fromMeasure($measure);
        }
    }

    public static function take(int $measure): self
    {
        return new self($measure);
    }

    public function measure(): int
    {
        return $this->measure;
    }
}