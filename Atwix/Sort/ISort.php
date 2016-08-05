<?php
namespace Atwix\Sort;

interface ISort
{
    public static function usort(array &$data, $callback = 'strcmp');
}