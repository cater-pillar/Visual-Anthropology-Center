<?php
    require './data/conn.php';
    
    include './data/tabs.php';
    
    
    
    
    
    
    
    include './models/Program.php';
    
    require './data/programs.php';
    
    $currentProgram = $programs[$_GET['id']];

    $programs_page = true;
    $title =  strip_tags($currentProgram->getTitle()) . " | Visual Anthropology Center";
    $header2 = $currentProgram->getTitle();
    require "./php/header.php";
?>
<segment>
    <div class='container'>
        <?php foreach ($currentProgram->getTabs() as $tab): ?>
                <div class='program-tabs select-none'>
                    <?php echo $tab->getTitle() ?> 
                    <span>+</span>
                </div>
                <div class='program-tabs-content hide-tab'>
                    <?php echo $tab->getContent() ?>
                </div>
        <?php endforeach; ?>
    </div>
</segment>
<div class='holder-center'><a href='form.php'  class='button btn-small select-none'> Apply Now</a></div>
<?php require "./php/footer.php"; ?>
<script>
function myFunction(x) {
  x.classList.toggle("change");
  let y = document.getElementById('links');
  y.classList.toggle("hide");
}

var tabs = document.getElementsByClassName('program-tabs');

var tabContent = document.getElementsByClassName('program-tabs-content');

var span = document.getElementsByTagName("span");

for (let i = 0; i < tabs.length; i++) {
    tabs[i].addEventListener('click', function() {showTabContent(i)});
};

function showTabContent(x) {   
    tabContent[x].classList.toggle('hide-tab');

    if (tabs[x].style.marginBottom == '0px') {
        tabs[x].style.marginBottom = '20px';
    } else {
        tabs[x].style.marginBottom = '0px'
    };

    if (span[x].innerText == '+') {
        span[x].innerText = '-';
    } else {
        span[x].innerText = '+'
    };
};



</script>
</body>