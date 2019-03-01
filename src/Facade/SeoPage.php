<?php

namespace Shevaua\LaravelSeo\Facade;

use Shevaua\LaravelSeo\SeoPage as SeoPageObject;

/**
 * Facade for wrapping SeoPage object
 */
class SeoPage
{

    /**
     * @var Shevaua\LaravelSeo\SeoPage
     */
    private static $instance;

    /**
     * Get SeoPage instance 
     * 
     * @return SeoPageObject
     */
    public static function getInstance(): SeoPageObject
    {

        if(!self::$instance)
        {
            self::$instance = new SeoPageObject;
        }
        return self::$instance;

    }

    /**
     * Get title
     * 
     * @return string
     */
    public static function getTitle(): string
    {

        return self::getInstance()->getTitle();

    }

    /**
     * Get meta info
     * 
     * @return array
     */
    public static function getMeta(): array
    {

        return self::getInstance()->getMeta();

    }

    /**
     * Get OpenGraph info
     * 
     * @return array
     */
    public static function getOg(): array
    {

        return self::getInstance()->getOg();

    }

}
