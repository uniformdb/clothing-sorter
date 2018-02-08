<?php

namespace ClothingSorter\Sizing;

class Small extends Sizing
{
    /**
     * The standard abbreviation for small.
     *
     * @var string
     */
    protected $abbrev = 'S';

    /**
     * The index for small.
     *
     * @var int
     */
    protected $index = 2;

    /**
     * The matching rules for small.
     *
     * @var array
     */
    protected $rules = [
        '/^SM*\s*/',
        '/^Small/',
        '/Small$/',
    ];
}
