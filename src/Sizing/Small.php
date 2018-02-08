<?php

namespace ClothingSorter\Sizing;

class Small extends Sizing
{
    /**
     * The abbreviation for extra small.
     *
     * @var string
     */
    protected $abbrev = 'S';

    /**
     * The index for extra small.
     *
     * @var int
     */
    protected $index = 2;

    /**
     * The matching rules for extra small.
     *
     * @var array
     */
    protected $rules = [
        '/^SM*\s*/',
        '/^Small/',
        '/Small$/',
    ];
}
