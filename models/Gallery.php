<?php

class Gallery {
    protected array $images;
    public string $title;
    protected string $thumbnail;
    protected string $slug;

    function __construct(array $images, string $title, string $thumbnail, string $slug)
    {
        $this->images = $images;
        $this->title = $title;
        $this->thumbnail = $thumbnail;
        $this->slug = $slug;
    }

    function getImages() {
        return $this->images;
    }
    function getTitle() {
        return $this->title;
    }
    function getThumbnail() {
        return $this->thumbnail;
    }
    function getSlug() {
        return $this->slug;
    }
};