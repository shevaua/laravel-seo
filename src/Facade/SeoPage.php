<?php

namespace Shevaua\LaravelSeo\Facade;

use Shevaua\LaravelSeo\SeoPage as SeoPageObject;

class SeoPage
{

    /**
     * @var Shevaua\LaravelSeo\SeoPage
     */
    private static $instance;

    /**
     * @return Shevaua\LaravelSeo\SeoPage
     */
    public static function getInstance()
    {

        if(!self::$instance)
        {
            self::$instance = new SeoPageObject;
        }
        return self::$instance;

    }

    /**
     * @return string
     */
    public static function getTitle()
    {

        return self::getInstance()->getTitle();

    }

    /**
     * @return array
     */
    public static function getMeta()
    {

        return self::getInstance()->getMeta();

    }

}
