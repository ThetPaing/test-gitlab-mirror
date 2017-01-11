<?php 
/**
 * Convert Number String Myanmar <=> English.
 *
 * @param  string  $string
 * @param  string  $lang [default is mm but u can add en to english]
 * @return string
 */
function number_convert($string, $lang = 'mm')
{
    $mm = ['၀','၁', '၂', '၃', '၄', '၅', '၆','၇','၈','၉'];
    
    $num = range(0, 9);
    switch ($lang) {
        case 'mm':
            return str_replace($num, $mm, $string);
            break;

        case 'en':
            return str_replace($mm, $num, $string);
            break;

        default:
            return $string;
            break;
    }        
}