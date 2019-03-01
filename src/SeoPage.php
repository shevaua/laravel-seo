<?php

namespace Shevaua\LaravelSeo;

/**
 * Object for storing meta information
 */
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
     * Set title
     * 
     * @param string $title
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Set meta information
     * 
     * @param string $name
     * @param string $content
     * @return self
     */
    public function setMeta(string $name, string $content): self
    {
        $this->meta[$name] = $content;
        return $this;
    }

    /**
     * Set OpenGraph information
     * 
     * @param string $property
     * @param string $content
     * @return self
     */
    public function setOg(string $property, string $content): self
    {
        if(!preg_match('#^og:#', $property))
        {
            $property = self::OG_PREFIX . $property;
        }
        $this->og[$property] = $content;
        return $this;
    }

    /**
     * Get title
     * 
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Get meta information
     * 
     * @return array
     */
    public function getMeta(): array
    {
        return $this->meta;
    }

    /**
     * Get OpenGraph information
     * 
     * @return array
     */
    public function getOg(): array
    {
        return $this->og;
    }

}
