<?php

namespace Shevaua\LaravelSeo;

class SeoPage
{
    /**
     * @var string $title
     */
    private $title = '';

    /**
     * @var array $meta
     */
    private $meta = [];

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

}
