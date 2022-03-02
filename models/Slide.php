<?php

class Slide {
    protected int $id;
    protected int $fk_gallery_id;
    protected string $photo_path;

    public function __construct($id, $fk, $photo_path)
    {
        $this->id = $id;
        $this->fk_gallery_id = $fk;
        $this->photo_path = $photo_path;
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
 
    public function getFk()
    {
        return $this->fk_gallery_id;
    }
 
    public function setFk($fk)
    {
        $this->fk_gallery_id = $fk;

        return $this;
    }
 
    public function getPhoto()
    {
        return $this->photo_path;
    }
 
    public function setPhoto($photo_path)
    {
        $this->photo_path = $photo_path;

        return $this;
    }
}