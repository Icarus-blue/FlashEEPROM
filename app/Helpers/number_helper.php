<?php

function number_signed($number)
{
    $sign = '+';
    if ($number < 0) {
        $sign = '-';
    }
    
    return $sign . number_format($number, 2);
}

function month_name($date)
{
    $months = [
        'Enero',
        'Febrero',
        'Marzo',
        'Abril',
        'Mayo',
        'Junio',
        'Julio',
        'Agosto',
        'Septiembre',
        'Octubre',
        'Noviembre',
        'Diciembre'
    ];
    
    return $months[date('n', $date) - 1];
}
