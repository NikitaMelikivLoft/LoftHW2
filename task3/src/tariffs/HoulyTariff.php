<?php

/**
 * Тариф Почасовой
 */
class HoulyTariff extends TariffAbstract implements TarifInterface
{
    use TimeTrait;
    use DriverTrait;

    protected function tariffPriceKilometer()
    {
        return 0;
    }

    protected function tariffPriceMinute()
    {

        return 200;//за 60 минут округляем в большую сторону
    }

    public function sum($distance, $time, $gps = false, $driver = false)
    {
        $gps ? $gps = $this->GpsTime($time) : $gps=false;
        $driver ? $driver = $this->driver() : $driver = false;
        $time = $this->HourlyTime($time);

        return parent::sum($distance, $time, $age, $gps, $driver);

    }
}
