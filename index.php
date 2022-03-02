<?php

    require './data/conn.php';
    
    include './data/tabs.php';


    include './models/Program.php';
    require './data/videos.php';
    require './data/programs.php';
    
    $title = "Home | Visual Anthropology Center";
    $header2 = "DOCUMENTS CAN BE ART AS PIECES OF ART CAN BE DOCUMENTS";
    require "./php/header.php";
?>
<segment>
    <div class='container'>
        <div class='holder-center'><a href='programs.php' ><h2 class='button btn-small select-none'> Programs</h2></a></div>
        <div class='flex'>
            <?php foreach ($programs as $key => $program): ?>
                <div class='flex-item flex-program'>
                    <img src=<?php echo $program->getIcon() ?> class='flex-icon select-none'>
                    <h3><?php echo $program->getTitle() ?></h3>
                    <?php echo $program->getPreview() ?>
                    <a href=<?php echo 'program-content.php?id=' . $key ?>>Read more</a> 
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
        <div class='holder-center'><a href='lab.php' ><h2 class='button btn-small select-none'> LAB</h2></a></div>
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
    <?php require "php/footer.php"; ?>
<script>
function myFunction(x) {
  x.classList.toggle("change");
  let y = document.getElementById('links');
  y.classList.toggle("hide");
}
</script>
</body>