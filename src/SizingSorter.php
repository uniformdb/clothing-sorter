<?php

namespace ClothingSorter;

use ClothingSorter\Exception\InvalidSizeException;

class SizingSorter
{
    /**
     * The initial size provided.
     *
     * @var string
     */
    protected $size;

    /**
     * The available sizes to match against.
     *
     * @var array
     */
    protected $sizes = [
        \ClothingSorter\Sizing\ExtraSmall::class,
    ];

    /**
     * Create a new sizing sorter.
     *
     * @param string $size
     *
     * @return void
     */
    public function __construct($size)
    {
        $this->size = $size;
    }

    /**
     * Create a new sizing sorter.
     *
     * @return ClothingSorter\Sizing\Size
     */
    public function make()
    {
        foreach ($this->sizes as $sizeClass) {
            $sizing = new $sizeClass($this->size);

            if ($sizing->matches($this->size)) {
                return $sizing;
            }
        }

        throw new InvalidSizeException('Unable to find a sizing for \''.$this->size.'\'');
    }
}
