<?php

class Program {
    protected string $title;
    protected string $icon;
    protected string $preview;
    protected array $tabs;

    function __construct(array $tabs, string $title, string $icon, string $preview)
    {
        $this->tabs = $tabs;
        $this->title = $title;
        $this->icon = $icon;
        $this->preview = $preview;
    }

    function getTabs() {
        return $this->tabs;
    }
    function getTitle() {
        return $this->title;
    }
    function getIcon() {
        return $this->icon;
    }
    function getPreview() {
        return $this->preview;
    }
};