<?php

namespace Tests\Sizing;

use ClothingSorter\Sizing\Medium;

class MediumTest extends SizingTestCase
{

    /**
     * Mapping to sizing class for SizingTestCase tests
     */
    protected $sizing = Medium::class;

    /**
     * File containing variations of the size medium to test.
     */
    protected $variationsFile = '/../data/medium_variations.php';

    /**
     * @test
     */
    public function it_returns_expected_index()
    {
        $size = new Medium();
        $this->assertEquals(3, $size->index());
    }

    /**
     * @test
     */
    public function it_returns_expected_abbrev()
    {
        $size = new Medium();
        $this->assertEquals('M', $size->abbrev());
    }

}
