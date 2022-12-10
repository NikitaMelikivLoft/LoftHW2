<?php
/**
 * Trait Стоймости gps
 */
trait GpsTrait
{
    use TimeTrait;
    protected $costGps = 15;

    public function gpsTime($time)
    {
        $costGps = $this->costGps;
        $time = $this->hourlyTime($time);
        $sum = $time * $costGps;
        echo "Вы взяли доп. услугу: GPS</br>";
        return $sum;
    }
}
