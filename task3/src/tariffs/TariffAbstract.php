<?php

abstract class TariffAbstract
{
    use GpsTrait;
    use DriverTrait;

    abstract protected function tariffPriceKilometer();
    abstract protected function tariffPriceMinute();

    public function sum($distance, $time, $gps = false, $driver = false)
    {
        $sum = $this->tariffPriceKilometer() * $distance + $this->tariffPriceMinute() * $time;
        $sum += $gps ? $this->gpsTime($time) : 0;
        $sum += $driver ? $this->driver() : 0;
        echo "Количество введенных часов: ".$this->hourlyTime ($time)."</br>";
        echo "Количество введенных км: ".$distance."</br>";
        return $sum;
    }
}