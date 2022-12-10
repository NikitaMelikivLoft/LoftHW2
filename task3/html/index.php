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
$priceH=$hourly->sum(0, 0.10,true,true);
$priceB=$base->sum(3, 0.10,true,true);
$priceS=$student->sum(0, 0.10,true,true);

print_r("<b>Каршеринг по часовому тарифу вам обойдется в $priceH рублей</b></br>");
print_r("<b>Каршеринг по базовому вам обойдется в $priceB рублей</b></br>");
print_r("<b>Каршеринг по студенческому вам обойдется в $priceS рублей</b></br>");