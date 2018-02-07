<?php

namespace Tests\Sizing;

use Tests\BaseTestCase;

class SizingTestCase extends BaseTestCase
{

    /**
     * @test
     */
    public function it_matches_size_variations()
    {
        foreach ($this->variations() as $variation) {
            $sizing = new $this->sizing();
            $this->assertTrue($sizing->matches($variation), 'Unable to match with variation ' . $variation);
        }
    }

    /**
     * @test
     */
    public function it_matches_size_variations_that_are_all_lowercase()
    {
        foreach ($this->variations() as $variation) {

            $lowerCaseVariation = strtolower($variation);

            $sizing = new $this->sizing();
            $this->assertTrue($sizing->matches($lowerCaseVariation), 'Unable to match with variation ' . $lowerCaseVariation);
        }
    }

    /**
     * An array of all variations for this size
     */
    protected function variations()
    {
        return require(dirname(__FILE__) . $this->variationsFile);
    }

}