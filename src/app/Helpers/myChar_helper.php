<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// CodeIgniter myChar Helpers

if (!function_exists('myChar')) {
    /**
     * Exibe um print e para o código
     */
    function myChar($string = NULL, $category = 1)
    {
        $remove_accent = preg_replace(array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/", "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/", "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/", "/(ç)/", "/(Ç)/"), explode(" ", "a A e E i I o O u U n N c C"), $string);
        if ($category == 1) {
            # Remove caracter especial e retorna sem espaço
            $remove_character = str_replace(array('\'', '"', ',', ';', '<', '>', '!', '@', '#', '$', '%', '¨', '&', '*', '(', ')', '_', '-', '+', '=', '{', '}', '[', ']', '^', '~', '/', '?', ':', ',', '.', '|', ' '), '', $remove_accent);
        }
        if ($category == 2) {
            # Remove caracter especial e retorna com espaço
            $remove_character = str_replace(array('\'', '"', ',', ';', '<', '>', '!', '@', '#', '$', '%', '¨', '&', '*', '(', ')', '_', '-', '+', '=', '{', '}', '[', ']', '^', '~', '/', '?', ':', ',', '.', '|', ' '), ' ', $remove_accent);
        }
        if ($category == 3) {
            # Remove caracter especial e retorna uderline
            $remove_character1 = str_replace(array('\'', '"', ',', ';', '<', '>', '!', '@', '#', '$', '%', '¨', '&', '*', '(', ')', '_',  '-', '+', '=', '{', '}', '[', ']', '^', '~', '/', '?', ':', ',', '.', '|', ' '), '_', $remove_accent);
            $remove_character = strtolower(str_replace(array('__'), '', $remove_character1));
        }
        if ($category == 4) {
            # Remove caracter especial e retorna com espaço
            $remove_character1 = str_replace(array('\'', '"', ',', ';', '<', '>', '!', '@', '#', '$', '%', '¨', '&', '*', '(', ')', '_',  '-', '+', '=', '{', '}', '[', ']', '^', '~', '/', '?', ':', ',', '.', '|', ' '), '_', $remove_accent);
            $remove_character = strtolower(str_replace(array('__'), '_', $remove_character1));
        }
        return $remove_character;
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

// CodeIgniter currency dB Helpers

if (!function_exists('currency_db')) {
    /**
     * Exibe um print e para o código
     */
    function currency_db($paramenter = NULL)
    {
        $valor1 = str_replace('.', '', $paramenter);
        $valor2 = str_replace(',', '.', $valor1);
        return ($valor2);
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

// CodeIgniter currency formats Helpers

if (!function_exists('currency_formats')) {
    /**
     * Exibe um print e para o código
     */
    function currency_formats($paramenter = NULL)
    {
        $result = number_format($paramenter, 2, ',', '.');
        return $result;
    }
}
