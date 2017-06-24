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

    public static function take(int $measure): self
    {
        return new static($measure);
    }

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

    public function measure(): int
    {
        return $this->measure;
    }

    public function isSuperHot(): bool
    {
        $threshold = $this->getThreshold();

        return $this->measure() > $threshold;
    }

    public function isSuperCold(ColdThresholdSource $coldThresholdSource)
    {
        $threshold = $coldThresholdSource->getThreshold();

        return $this->measure() < $threshold;
    }

    protected function getThreshold()
    {
        $conn = \Doctrine\DBAL\DriverManager::getConnection(array(
            'dbname' => 'mydb',
            'user' => 'user',
            'password' => 'secret',
            'host' => 'localhost',
            'driver' => 'pdo_mysql',
        ), new \Doctrine\DBAL\Configuration());

        return $conn->fetchColumn('SELECT hot_threshold FROM configuration');
    }
}