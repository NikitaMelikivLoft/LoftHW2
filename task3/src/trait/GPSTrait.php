<?php
/**
 * Trait Стоймости gps
 */
trait GpsTrait
{
    use TimeTrait;
    protected $costGps = 15;

    public function GpsTime($time)
    {
        $costGps = $this->costGps;
        $time = $this->HourlyTime($time);
        $sum = $time * $costGps;
        return $sum;
    }
}
