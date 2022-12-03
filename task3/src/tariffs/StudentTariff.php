<?php

/**
 * Тариф Студенчиский
 */
class StudentTariff extends TariffAbstract implements TarifInterface
{
    use DriverTrait;

    protected function tariffPriceKilometer()
    {
        return 4;
    }

    protected function tariffPriceMinute()
    {
        return 1;
    }

    public function sum($distance, $time, $gps = false, $driver = false)
    {
        $gps ? $gps = $this->GpsTime($time) : $gps=false;
        $driver ? $driver = $this->driver() : $driver = false;
        return parent::sum($distance, $time, $age, $gps, $driver);
    }
}
