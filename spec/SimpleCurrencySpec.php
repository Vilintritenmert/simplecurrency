<?php

namespace spec;

use SimpleCurrency;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SimpleCurrencySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SimpleCurrency::class);
    }

    function it_is_get_currencies() 
    {
        $this->get()->shouldBeArray();
    }
}
