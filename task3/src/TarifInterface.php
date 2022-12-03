<?php

/**
 * Interface interfaceTariff
 * Интерфейс подсчета суммы
 */
interface TarifInterface
{
    public function sum($distance, $time);
}
