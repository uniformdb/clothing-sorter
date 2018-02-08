<?php

namespace ClothingSorter\Sizing;

class Large extends Sizing
{
    /**
     * The standard abbreviation for large.
     *
     * @var string
     */
    protected $abbrev = 'L';

    /**
     * The index for large.
     *
     * @var int
     */
    protected $index = 4;

    /**
     * The matching rules for large.
     *
     * @var array
     */
    protected $rules = [
        '/^L$/',
        '/^Large/',
        '/Large$/',
        '/^L\s+/',
    ];
}
