<?php

/**
 * Trait Расчета времени про Daily тарифе
 */
trait TimeTrait
{
    public function hourlyTime($time)
    {
        $time = ceil($time / 60);
        return $time;
    }
}