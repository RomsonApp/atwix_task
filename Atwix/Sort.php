<?php
namespace Atwix;

use Atwix\Sort\ISort;

abstract class Sort implements ISort
{
    const SURNAME = 1;

    public static function usort(array &$data, $callback = 'strcmp')
    {
        switch ($callback) {
            case 1:
                usort($data, array('self', 'sort_surname'));
                break;
            default:
                usort($data, $callback);
                break;
        }
    }

    private static function sort_surname($a, $b)
    {
        $a = preg_split("/[\s,]+/", $a);
        $b = preg_split("/[\s,]+/", $b);
        return strcmp($a[1], $b[1]);
    }
}