<?php
    require './data/conn.php';
    include './data/slides.php';
    include './models/Gallery.php';

    require './data/galleries.php';
    $currentGallery;

    foreach ($galleries as $gallery) {
        if ($gallery->getSlug() == $_GET['id']) {
            $currentGallery = $gallery;
        };
    };

    $title = 'Gallery | '. strip_tags($currentGallery->getTitle()) .' | Visual Anthropology Center';
    $header2 = $currentGallery->getTitle();
    require "./php/header.php";
?>
<segment>
    <div class='container'>
        <div class='flex wrap'>
            <?php foreach ($currentGallery->getImages() as $image): ?>
                <div class='flex-item flex-photo-lab'>
                    <img src=<?php echo $image ?> class='gallery-img-lab select-none'> 
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</segment>

<div id='slide'>
    <?php require "svg/exit.php";
          require "svg/prev.php";
          require "svg/next.php";
     ?>   


    <img id='slide-image' class='select-none' src=''>
</div>

<script>
function myFunction(x) {
  x.classList.toggle("change");
  let y = document.getElementById('links');
  y.classList.toggle("hide");
}


var slideVar = [];


var gallery = document.getElementsByClassName('flex-photo-lab');

for (let i = 0; i < gallery.length; i++) {
    gallery[i].addEventListener('click', function() {showSlide(i)});
};

var body = document.getElementsByTagName("BODY")[0];
var slide = document.getElementById('slide');
var slideImage = document.getElementById('slide-image');
var counter = 0;
var galleryId = window.location.search.slice(4);

function showSlide(x) {

    let xhr = new XMLHttpRequest();

    xhr.open('GET', 'json/slide_json.php?id=<?php echo $_GET["id"] ?>', true); 
    
    xhr.onload = function() {
        if(this.status == 200) {
            var photoList = JSON.parse(this.responseText);
            console.log(photoList);
        slide.style.display = 'flex';
        body.style.overflow = 'hidden';
        slideVar = photoList;
        
        slideImage.src = photoList['images'][x];
        counter = x;
        };
    };
    xhr.send();
};



function hideSlide() {
    slide.style.display = 'none';
    body.style.overflow = 'visible';
    slideImage.src = '';
    slideVar = [];
    counter = 0;
}



function nextSlide(x) {
    if (counter == x['images'].length-1) {
        counter=0;
    } else {
        counter++;    
    };
    slideImage.src = x['images'][counter];
};

function prevSlide(x) {
    if (counter == 0) {
        counter= x['images'].length-1;
    } else {
        counter--;    
    };
    slideImage.src = x['images'][counter];
};
</script>

<?php require "./php/footer.php"; ?>

</body>