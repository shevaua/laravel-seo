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
    }

    public function testFilledSeoPage()
    {
        $seoPage = new SeoPage;
        $seoPage
            ->setTitle('title')
            ->setMeta('description', 'description');

        $this->assertEquals('title', $seoPage->getTitle());
        $this->assertEquals(
            ['description' => 'description'], 
            $seoPage->getMeta()
        );
    }

}
