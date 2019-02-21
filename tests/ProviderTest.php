<?php

namespace Shevaua\LaravelSeo;

use PHPUnit\Framework\TestCase;
use Shevaua\LaravelSeo\Provider\Directive;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class ProviderTest extends TestCase
{

    public function testProvider()
    {
        
        $app = new Application;  
        $provider = new Directive($app);
        
        $this->assertEquals($provider instanceof ServiceProvider, true);
        $this->assertEquals(method_exists($provider, 'boot'), true);
        $this->assertEquals(method_exists($provider, 'register'), true);

    }

}
