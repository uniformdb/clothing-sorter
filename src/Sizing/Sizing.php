<?php

namespace ClothingSorter\Sizing;

abstract class Sizing
{
    /**
     * Returns the abbreviation.
     *
     * @return string
     */
    public function abbrev()
    {
        return $this->abbrev;
    }

    /**
     * Returns the numerical index for the sizing.
     *
     * @return int
     */
    public function index()
    {
        return $this->index;
    }

    /**
     * Returns true when the passed size matches the current sizing.
     *
     * @return bool
     */
    public function matches($size)
    {
        foreach ($this->rules as $rule) {
            if (preg_match(strtolower($rule), strtolower($size))) {
                return true;
            }
        }


        return false;
    }

}
