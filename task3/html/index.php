<?php

require_once '../src/trait/TimeTrait.php';
require_once '../src/trait/GpsTrait.php';
require_once '../src/trait/DriverTraite.php';
require_once '../src/TarifInterface.php';
require_once '../src/tariffs/TariffAbstract.php';
require_once '../src/tariffs/BasicTariff.php';
require_once '../src/tariffs/HoulyTariff.php';
require_once '../src/tariffs/StudentTariff.php';

$base = new BasicTariff();
$hourly = new HoulyTariff();//Время указывается в минутах округляется до 60
$student = new StudentTariff();
//обязательные аргументы дистанция, время и не обязательные gps, доп водитель
$FinalPrice=$hourly->sum(0, 0.10);
print_r("Каршеринг вам обойдется в $FinalPrice рублей");