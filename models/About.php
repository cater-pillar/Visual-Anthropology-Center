<?php

class About {
    protected string $title;
    protected string $icon;
    protected string $content;

    function __construct(string $title, string $icon, string $content)
    {
        $this->title = $title;
        $this->icon = $icon;
        $this->content = $content;
    }

    function getTitle() {
        return $this->title;
    }
    function getIcon() {
        return $this->icon;
    }
    function getContent() {
        return $this->content;
    }
}