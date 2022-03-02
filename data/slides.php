<?php

require './models/Slide.php';


$getSlides = $conn->query('SELECT * FROM `slide`');
$results = $getSlides->fetch_all(MYSQLI_ASSOC);

$slides = [];

foreach ($results as $result) {
    array_push($slides, new Slide($result['slide_id'], $result['fk_gallery_id'], $result['photo_path']));
}
