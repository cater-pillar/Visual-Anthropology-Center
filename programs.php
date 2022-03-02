<?php
    require './data/conn.php';
    
    include './data/tabs.php';
    
    
    include './models/Program.php';
    
    require './data/programs.php';
    
    $programs_page = true;
    $title =  "Programs | Visual Anthropology Center";
    $header2 = "PROGRAMS";
    require "./php/header.php";
?>
<segment>
    <div class='container'>
        <?php foreach ($programs as $key => $program): ?>
            <a href=<?php echo 'program-content.php?id=' . $key  ?> ><div class='program-links button'><?php echo $program->getTitle() ?></div></a>
        <?php endforeach; ?>
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