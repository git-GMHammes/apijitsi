<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// CodeIgniter My Date validation Helpers

if (!function_exists('myDateDay')) {
    /**
     * Calcula numero de dias de uma data
     */
    function myDateDay($date_start = NULL, $date_end = NULL)
    {
        if ($date_start !== NULL && $date_end !== NULL) {
            if (strtotime($date_end) > strtotime($date_start)) {
                $diferenca = strtotime($date_end) - strtotime($date_start);
                $days = floor($diferenca / (60 * 60 * 24));
                return ($days);
            }
        }
        return 0;
    }
}
/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// CodeIgniter Show Data System

if (!function_exists('myDateSystem')) {
    /**
     * Calcula numero de dias de uma data
     */
    function myDateSystem($nameSistem)
    {
        echo "{$nameSistem}, ";
        $date = new DateTime();
        $formatter = new IntlDateFormatter(
            'pt_BR',
            IntlDateFormatter::FULL,
            IntlDateFormatter::NONE,
            'America/Sao_Paulo',
            IntlDateFormatter::GREGORIAN
        );
        echo $formatter->format($date);
        return NULL;
    }
}