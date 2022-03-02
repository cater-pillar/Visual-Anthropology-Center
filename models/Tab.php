<?php

class Tab {
    protected string $title;
    protected string $content;
    protected int $fk_program_id;
    protected int $id;

    function __construct(string $title, string $content, int $fk_program_id)
    {
        $this->title = $title;
        $this->content = $content;
        $this->fk_program_id = $fk_program_id;
    }

 
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    public function getFk()
    {
        return $this->fk_program_id;
    }

    public function setFk($fk_program_id)
    {
        $this->fk_program_id = $fk_program_id;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
};