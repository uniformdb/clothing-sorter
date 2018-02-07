<?php

namespace ClothingSorter\Sizing;

class ExtraSmall extends Sizing
{
    /**
     * The abbreviation for extra small.
     * 
     * @var string
     */
    protected $abbrev = 'XS';


    /**
     * The index for extra small.
     * 
     * @var int
     */
    protected $index = 1;

    /**
     * The matching rules for extra small.
     * 
     * @var array
     */
    protected $rules = [
        '/^XS/',
        '/XS$/'
    ];

}
