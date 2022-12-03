<?php

/**
 * Trait Дополнителтного водителя
 */
trait DriverTrait
{
    protected $driver = 100;

    public function driver()
    {
        return $this->driver;
    }
}
