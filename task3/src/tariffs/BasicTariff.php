<?php
/**
 * Class Базового тарифа
 */
class BasicTariff extends TariffAbstract implements TarifInterface{
    use DriverTrait;

    protected function tariffPriceKilometer()
    {
        return 10;
    }

    protected function tariffPriceMinute()
    {
        return 3;
    }

    public function sum($distance, $time, $gps = false, $driver = false)
    {   $gps ? $gps = $this->GpsTime($time) : $gps=false;
        $driver ? $driver = $this->driver() : $driver = false;
        return parent::sum($distance, $time, $age, $gps, $driver);
    }
}