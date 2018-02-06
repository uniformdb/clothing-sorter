<?php

namespace ClothingSorter\Sizing;

class ExtraSmall extends Sizing
{

    protected $abbrev = 'XS';
    protected $index = 1;

    /**
     * Returns true when the size matches the current sizing.
     * 
     * @return boolean
     */
    public function matches($size) {
        if ($size === 'XS') {
            return true;
        }
        return false;
    }
    
}