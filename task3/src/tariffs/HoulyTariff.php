<?php

/**
 * Тариф Почасовой
 */
class HoulyTariff extends TariffAbstract
{
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
        echo "Тариф 'Почасовой'</br>";
        $time = $this->hourlyTime($time);
        return parent::sum($distance, $time, $gps, $driver);
    }
}
