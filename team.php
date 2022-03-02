<?php
    require './data/conn.php';
    require './data/about.php';
    require './data/team.php';

    $title = "About Us | Visual Anthropology Center";
    $header2 = "ABOUT US";
    require "./php/header.php";
?>
<segment>
    <div class="container flex">
        <?php foreach ($abouts as $about): ?>
            <div class='flex-item flex-about'>
            <img src=<?php echo $about->getIcon() ?> class='flex-icon select-none'>
            <h3><?php echo $about->getTitle() ?></h3>
            <?php echo $about->getContent() ?>
            </div>
        <?php endforeach ?>
    </div>
</segment>
<segment>
<div class='separator'>
    <div class="container">
        
    </div>
</div>
</segment>
<segment>
    <div class="container">
    <h2>OUR TEAM</h2>
    <div class='flex wrap'>
        <?php foreach ($team as $teammate):?>
            <div class='flex-item flex-bio'>
                <h2><?php echo $teammate->getName() ?></h2>
                <h3><?php echo $teammate->getPosition() ?></h3>
                <img src=<?php echo $teammate->getPortrait() ?> class='flex-portrait select-none'>
                <?php echo $teammate->getBio() ?>
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