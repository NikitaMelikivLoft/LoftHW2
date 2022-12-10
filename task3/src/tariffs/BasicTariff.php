<?php
/**
 * Class Базового тарифа
 */
class BasicTariff extends TariffAbstract {

    protected function tariffPriceKilometer()
    {
        return 10;
    }

    protected function tariffPriceMinute()
    {
        return 3;
    }

    public function sum($distance, $time, $gps = false, $driver = false)
    {
        echo "Тариф 'Базовый'</br>";
        return parent::sum($distance, $time, $gps, $driver);
    }
}