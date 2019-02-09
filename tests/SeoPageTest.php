<?php

namespace Shevaua\LaravelSeo;

use PHPUnit\Framework\TestCase;

class SeoPageTest extends TestCase
{

    public function testEmptySeoPage()
    {
        $seoPage = new SeoPage;
        $this->assertEmpty($seoPage->getTitle());
        $this->assertEmpty($seoPage->getMeta());
        $this->assertEmpty($seoPage->getOg());
    }

    public function testFilledSeoPage()
    {
        $seoPage = new SeoPage;
        $seoPage
            ->setTitle('title')
            ->setMeta('description', 'description')
            ->setOg('title', 'title')
            ->setOg('og:description', 'description');

        $this->assertEquals('title', $seoPage->getTitle());
        $this->assertEquals(
            ['description' => 'description'], 
            $seoPage->getMeta()
        );
        $this->assertEquals(
            [
                'og:title' => 'title',
                'og:description' => 'description',
            ],
            $seoPage->getOg()
        );
    }

}
