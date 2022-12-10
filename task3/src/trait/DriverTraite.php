<?php

/**
 * Trait Дополнителтного водителя
 */
trait DriverTrait
{
    protected $driver = 100;

    public function driver()
    {
        echo "Вы взяли доп. услугу: Водитель</br>";
        return $this->driver;
    }
}
