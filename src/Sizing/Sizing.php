<?php

namespace ClothingSorter\Sizing;

abstract class Sizing
{
    /**
     * Returns true when the size matches the current sizing.
     *
     * @return bool
     */
    abstract public function matches($size);

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
}
