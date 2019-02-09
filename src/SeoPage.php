<?php

namespace Shevaua\LaravelSeo;

class SeoPage
{

    const OG_PREFIX = 'og:';

    /**
     * @var string $title
     */
    private $title = '';

    /**
     * @var array $meta
     */
    private $meta = [];

    /**
     * @var array $og
     */
    private $og = [];

    /**
     * @return self
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return self
     */
    public function setMeta(string $name, string $content)
    {
        $this->meta[$name] = $content; 
        return $this;
    }

    /**
     * @return self
     */
    public function setOg(string $property, string $content)
    {
        if(!preg_match('#^og:#', $property))
        {
            $property = self::OG_PREFIX . $property;
        }
        $this->og[$property] = $content;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return array
     */
    public function getMeta(): array
    {
        return $this->meta;
    }

    /**
     * @return array
     */
    public function getOg(): array
    {
        return $this->og;
    }

}
