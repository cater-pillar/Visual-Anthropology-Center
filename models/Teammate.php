<?php

class Teammate {
    protected string $name;
    protected string $position;
    protected string $portrait;
    protected string $bio;

    function __construct(string $name, string $position, string $portrait, string $bio)
    {
        $this->name = $name;
        $this->position = $position;
        $this->portrait = $portrait;
        $this->bio = $bio;
    }

    function getName() {
        return $this->name;
    }
    function getPosition() {
        return $this->position;
    }
    function getPortrait() {
        return $this->portrait;
    }
    function getBio() {
        return $this->bio;
    }
};