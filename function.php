<?php

/**
 *  Форматирует цену, пример: 12 450 ₽
 *
 * @param int|float $price
 * @param string $signCurrency
 * @return string
 */
function formatPrice(float $price, string $signCurrency  = '₽'): string
{
    return number_format($price, 0, '.', ' ') . " $signCurrency";
}

/**
 *  Удобно распечатывает массив
 *
 * @param string|array $data
 * @param boolean $die
 * @return
 */
function debug($data, $die = false)
{
    echo "<pre>" . print_r($data, 1) . "</pre>";
    if ($die) {
        die;
    }
}
