<?php

/**
 * Trait Расчета времени про Daily тарифе
 */
trait TimeTrait
{
    public function HourlyTime($time)
    {

        $time = ceil($time / 60);
        return $time;
    }
}