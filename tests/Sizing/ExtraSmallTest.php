<?php

namespace Tests\Sizing;

use ClothingSorter\Sizing\ExtraSmall;

class ExtraSmallTest extends SizingTestCase
{

    /**
     * Mapping to sizing class for SizingTestCase tests
     */
    protected $sizing = ExtraSmall::class;

    /**
     * File containing variations of the size extra small to test.
     */
    protected $variationsFile = '/../data/extra_small_variations.php';

    /**
     * @test
     */
    public function it_returns_expected_index()
    {
        $size = new ExtraSmall();
        $this->assertEquals(1, $size->index());
    }

    /**
     * @test
     */
    public function it_returns_expected_abbrev()
    {
        $size = new ExtraSmall();
        $this->assertEquals('XS', $size->abbrev());
    }

}
