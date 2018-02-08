<?php

namespace ClothingSorter\Sizing;

class Medium extends Sizing
{
    /**
     * The standard abbreviation for medium.
     *
     * @var string
     */
    protected $abbrev = 'M';

    /**
     * The index for medium.
     *
     * @var int
     */
    protected $index = 3;

    /**
     * The matching rules for medium.
     *
     * @var array
     */
    protected $rules = [
        '/^MD*$/',
        '/^MED/',
        '/MED$/',
        '/MEDIUM$/'
    ];
}
