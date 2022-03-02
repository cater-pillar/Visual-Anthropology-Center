<?php

require './data/conn.php';

include './data/slides.php';

include './models/Gallery.php';

require './data/galleries.php';

    require './data/videos.php';
    
    
    $title = "Lab | Visual Anthropology Center";
    $header2 = "LAB";
    require "./php/header.php";
?>
<segment>
    <div class='container'>
        <div class='flex wrap'>
            <?php foreach ($galleries as $gallery): ?>
                <div class='flex-item flex-photo'>
                     <a href=<?php echo 'gallery.php?id='.$gallery->getSlug() ?>>
                        <h3><?php echo $gallery->getTitle() ?></h3>
                        <img src=<?php echo $gallery->getThumbnail() ?> id=<?php echo $gallery->getSlug() ?> class='gallery-img select-none'> 
                    <a>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</segment>
<segment>
    <div class='separator'>
    </div>
</segment>
<segment id="video">
        <div class='container'>
        
            <div class="flex wrap">
                <?php foreach ($videos as $video): ?>
                    <div class='flex-item flex-video'>
                        <iframe
                            src=<?php echo $video ?> 
                            title="YouTube video player" frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                        </iframe> 
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </segment>


<?php require "./php/footer.php"; ?>

<script>

function myFunction(x) {
  x.classList.toggle("change");
  let y = document.getElementById('links');
  y.classList.toggle("hide");
}   

</script>
</body>