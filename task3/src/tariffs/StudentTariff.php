<?php

/**
 * Тариф Студенчиский
 */
class StudentTariff extends TariffAbstract
{
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
        echo "Тариф 'Студенчиский'</br>";
        return parent::sum($distance, $time, $gps, $driver);
    }
}
