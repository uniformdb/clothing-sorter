<?php

namespace Tests\Sizing;

use ClothingSorter\Sizing\ExtraSmall;
use Tests\BaseTestCase;

class ExtraSmallTest extends BaseTestCase
{
    /**
     * @test
     */
    public function it_matches_size_variations()
    {
        foreach ($this->extraSmallVariations() as $variation) {
            $extraSmall = new ExtraSmall();
            $this->assertTrue($extraSmall->matches($variation), 'Unable to match with variation '.$variation);
        } 
    }

    /**
     * @test
     */
    public function it_matches_size_variations_that_are_all_lowercase()
    {
        foreach ($this->extraSmallVariations() as $variation) {

            $lowerCaseVariation = strtolower($variation);

            $extraSmall = new ExtraSmall();
            $this->assertTrue($extraSmall->matches($lowerCaseVariation), 'Unable to match with variation ' . $lowerCaseVariation);
        }
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

    private function extraSmallVariations()
    {
        return require(dirname(__FILE__) . '/../data/extra_small_variations.php');
    }
}
