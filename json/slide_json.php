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

$ourSpace = [
    "assets/ourSpace/1.jpg",
    "assets/ourSpace/2.jpg",
    "assets/ourSpace/3.jpg",
    "assets/ourSpace/4.jpg",
    "assets/ourSpace/5.jpg",
    "assets/ourSpace/6.jpg",
    "assets/ourSpace/7.jpg",
    "assets/ourSpace/8.jpg",
    "assets/ourSpace/9.jpg",
    "assets/ourSpace/10.jpg",
    "assets/ourSpace/11.jpg",
    "assets/ourSpace/12.jpg",
    "assets/ourSpace/13.jpg",
    "assets/ourSpace/14.jpg",
    "assets/ourSpace/15.jpg",
    "assets/ourSpace/16.jpg",
];


$fieldwork = [
    "assets/Fieldwork/1.jpg",
    "assets/Fieldwork/2.jpg",
    "assets/Fieldwork/3.jpg",
    "assets/Fieldwork/4.jpg",
    "assets/Fieldwork/5.jpg",
    "assets/Fieldwork/6.jpg",
    "assets/Fieldwork/7.jpg",
    "assets/Fieldwork/8.jpg",
    "assets/Fieldwork/9.jpg",
    "assets/Fieldwork/10.jpg",
    "assets/Fieldwork/11.jpg",
    "assets/Fieldwork/12.jpg",
];

$sva_6 = [
    "assets/schoolOfVisualAnthropology6/1.jpg",
    "assets/schoolOfVisualAnthropology6/2.jpg",
    "assets/schoolOfVisualAnthropology6/3.jpg",
    "assets/schoolOfVisualAnthropology6/4.jpg",
    "assets/schoolOfVisualAnthropology6/5.jpg",
    "assets/schoolOfVisualAnthropology6/6.jpg",
    "assets/schoolOfVisualAnthropology6/7.jpg",
    "assets/schoolOfVisualAnthropology6/8.jpg",
    "assets/schoolOfVisualAnthropology6/9.jpg",
    "assets/schoolOfVisualAnthropology6/10.jpg",
    "assets/schoolOfVisualAnthropology6/11.jpg",
    "assets/schoolOfVisualAnthropology6/12.jpg",
    "assets/schoolOfVisualAnthropology6/13.jpg",
    "assets/schoolOfVisualAnthropology6/14.jpg",
    "assets/schoolOfVisualAnthropology6/15.jpg",
    "assets/schoolOfVisualAnthropology6/16.jpg",
    "assets/schoolOfVisualAnthropology6/17.jpg",
];

$sva_7 = [
    "assets/schoolOfVisualAnthropology7/1.jpg",
    "assets/schoolOfVisualAnthropology7/2.jpg",
    "assets/schoolOfVisualAnthropology7/3.jpg",
    "assets/schoolOfVisualAnthropology7/4.jpg",
    "assets/schoolOfVisualAnthropology7/5.jpg",
    "assets/schoolOfVisualAnthropology7/6.jpg",
    "assets/schoolOfVisualAnthropology7/7.jpg",
    "assets/schoolOfVisualAnthropology7/8.jpg",
    "assets/schoolOfVisualAnthropology7/9.jpg",
    "assets/schoolOfVisualAnthropology7/10.jpg",
    "assets/schoolOfVisualAnthropology7/11.jpg",
    "assets/schoolOfVisualAnthropology7/12.jpg",
    "assets/schoolOfVisualAnthropology7/13.jpg",
    "assets/schoolOfVisualAnthropology7/14.jpg",
    "assets/schoolOfVisualAnthropology7/15.jpg",
    "assets/schoolOfVisualAnthropology7/16.jpg",
    "assets/schoolOfVisualAnthropology7/17.jpg",
    "assets/schoolOfVisualAnthropology7/18.jpg",
    "assets/schoolOfVisualAnthropology7/19.jpg",
    "assets/schoolOfVisualAnthropology7/20.jpg",
];


$galleries = [
    new Gallery($ourSpace, "Our Space", "assets/ourSpace/15.jpg", "our-space"),
    new Gallery($fieldwork, "Fieldwork", "assets/Fieldwork/3.jpg", "fieldwork"),
    new Gallery($sva_6, "School <br> of <br> Visual Anthropology VI", "assets/schoolOfVisualAnthropology6/13.jpg", "sva6"),
    new Gallery($sva_7, "School <br> of <br> Visual Anthropology VII", "assets/schoolOfVisualAnthropology7/19.jpg", "sva7"),
];

foreach ($galleries as $gallery) {
    if ($gallery->getSlug() == $_GET['id']) {
        $currentGallery = $gallery;
    };
};


class DTO {
    public array $images;
    public string $title;
    public string $thumbnail;
    public string $slug;

    function __construct(Gallery $gallery)
    {
        $this->images = $gallery->getImages();
        $this->title = $gallery->getTitle();
        $this->thumbnail = $gallery->getThumbnail();
        $this->slug = $gallery->getSlug();
    }
}

$dto = new DTO($currentGallery);



    echo json_encode($dto);
    ?>