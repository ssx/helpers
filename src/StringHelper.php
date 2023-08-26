<?php

namespace Ssx\Helpers;

/**
 * A small collection of helper functions related to strings.
 */
class StringHelper
{

    /**
     * This function will reduce instances of spaces within a string down
     * to a single space.
     *
     * @param string $string
     * @return string
     */
    public static function reduceSpaces(string $string = ''): string
    {
        return preg_replace('/\s+/', ' ', $string);
    }
}