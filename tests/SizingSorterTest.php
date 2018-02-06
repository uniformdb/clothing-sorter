<?php

namespace Tests;

use ClothingSorter\SizingSorter;

class SizingSorterTest extends BaseTestCase
{
    /**
     * @test
     * @expectedException ClothingSorter\Exception\InvalidSizeException
     */
    public function it_throws_invalid_size_exception_when_we_pass_an_unknown_size()
    {
        $sizing = (new SizingSorter('XLSJDF'))->make();
    }

    /**
     * @test
     */
    public function it_returns_an_extra_small_sizing()
    {
        $sizing = (new SizingSorter('XS'))->make();
        $this->assertInstanceOf('ClothingSorter\Sizing\ExtraSmall', $sizing);
    }
}
