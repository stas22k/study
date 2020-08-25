<?php
/**
 *  Форматирует цену, пример: 12 450 ₽
 *
 * @param int|float $price
 * @param string $currencySign
 * @return string
 */
function formatPrice(float $price, string $currencySign = '₽'): string
{
    return number_format($price, 0, '.', ' ') . " $currencySign";
}