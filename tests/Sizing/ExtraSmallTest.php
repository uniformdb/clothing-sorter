<?php

namespace Tests\Sizing;

use Tests\BaseTestCase;
use ClothingSorter\Sizing\ExtraSmall;

class ExtraSmallTest extends BaseTestCase
{
    /** 
     * @test 
     */
    public function it_matches_size_variations()
    {
        $size = new ExtraSmall();
        $this->assertTrue($size->matches('XS'));
    }

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