<?php

namespace spec\Thepixeldeveloper\Sitemap;

use Thepixeldeveloper\Sitemap\Url;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UrlSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('https://www.example.com/');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Url::class);
    }

    function it_should_have_a_loc()
    {
        $this->getLoc()->shouldReturn('https://www.example.com/');
    }

    function it_should_have_a_last_mod()
    {
        $this->getLastMod()->shouldReturn(null);
    }

    function it_should_have_a_change_freq()
    {
        $this->getChangeFreq()->shouldReturn(null);
    }

    function it_should_have_a_priority()
    {
        $this->getPriority()->shouldReturn(null);
    }
}
