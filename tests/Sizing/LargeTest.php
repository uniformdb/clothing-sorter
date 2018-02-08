<?php

namespace Tests\Sizing;

use ClothingSorter\Sizing\Large;

class LargeTest extends SizingTestCase
{

    /**
     * Mapping to sizing class for SizingTestCase tests
     */
    protected $sizing = Large::class;

    /**
     * File containing variations of the size large to test.
     */
    protected $variationsFile = '/../data/large_variations.php';

    /**
     * @test
     */
    public function it_returns_expected_index()
    {
        $size = new Large();
        $this->assertEquals(4, $size->index());
    }

    /**
     * @test
     */
    public function it_returns_expected_abbrev()
    {
        $size = new Large();
        $this->assertEquals('L', $size->abbrev());
    }

}
