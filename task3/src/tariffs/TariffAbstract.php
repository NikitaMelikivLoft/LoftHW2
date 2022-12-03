<?php

abstract class TariffAbstract implements TarifInterface
{
    use GpsTrait;

    abstract protected function tariffPriceKilometer();

    abstract protected function tariffPriceMinute();

    public function sum($distance, $time, $gps = false, $driver = false)
    {
        $sum = $this->tariffPriceKilometer() * $distance + $this->tariffPriceMinute() * $time;
        if ($gps) {
            $sum += $gps;
        }
        if ($driver) {
            $sum += $driver;
        }
        return $sum;
        }
}