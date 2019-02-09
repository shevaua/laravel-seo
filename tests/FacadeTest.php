<?php

namespace Shevaua\LaravelSeo;

use PHPUnit\Framework\TestCase;
use Shevaua\LaravelSeo\Facade\SeoPage as FacadeSeo;

class FacadeTest extends TestCase
{

    public function testTitleSeoPage()
    {

        $this->assertEmpty(FacadeSeo::getTitle());
        FacadeSeo::getInstance()->setTitle('title');
        $this->assertEquals('title', FacadeSeo::getTitle());

    }

    public function testMetaSeoPage()
    {

        $this->assertEmpty(FacadeSeo::getMeta());
        FacadeSeo::getInstance()->setMeta('test', 'test');
        $this->assertEquals(['test' => 'test'], FacadeSeo::getMeta());

    }

    public function testOgSeoPage()
    {
     
        $this->assertEmpty(FacadeSeo::getOg());
        FacadeSeo::getInstance()
            ->setOg('title', 'test');
        $this->assertEquals(
            ['og:title' => 'test'], 
            FacadeSeo::getOg()
        );

    }

}
