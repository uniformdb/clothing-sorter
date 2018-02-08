<?php

namespace Tests\Sizing;

use ClothingSorter\Sizing\Small;

class SmallTest extends SizingTestCase
{

    /**
     * Mapping to sizing class for SizingTestCase tests
     */
    protected $sizing = Small::class;

    /**
     * File containing variations of the size extra small to test.
     */
    protected $variationsFile = '/../data/small_variations.php';

    /**
     * @test
     */
    public function it_returns_expected_index()
    {
        $size = new Small();
        $this->assertEquals(2, $size->index());
    }

    /**
     * @test
     */
    public function it_returns_expected_abbrev()
    {
        $size = new Small();
        $this->assertEquals('S', $size->abbrev());
    }

}
