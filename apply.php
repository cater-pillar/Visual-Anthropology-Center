<?php 

require './data/conn.php';
    
include './data/tabs.php';

include './models/Program.php';
include './data/programs.php';
require './data/countries.php';
    require './models/Application.php';
    require './data/programs.php';
    require './data/countries.php';


    if (isset($_POST['name']) &&
        isset($_POST['email']) &&
        isset($_POST['country']) &&
        isset($_POST['program']) &&
        isset($_POST['msg'])
        ) {
            
            $application = new Application(
                $_POST['name'],
                $_POST['email'],
                $_POST['country'],
                $_POST['program'],
                $_POST['msg']
            );
            
            if (!$application->verifyApplication()) {
                $error = "There is an error in your application. Please check if you filled the form properly.";
            }
        }
        $title = "Application | Visual Anthropology Center";
        $header2 = "APPLY TO ONE OF OUR PROGRAMS";
        require "./php/header.php";
?>
<div class="container">
    <?php if (isset($error)) : ?> 
        <?php echo $error; ?>
    <?php else: ?>
        <div class="form">
            Application sent successfully. Here is your info:
            <br>
            <?php echo $application->getName() ?>
            <br>
            <?php echo $application->getEmail() ?>
            <br>
            <?php echo $countries[$application->getCountry()] ?>
            <br>
            <?php echo $programs[$application->getProgramId()]->getTitle() ?>
            <br>
            <?php echo $application->getMsg() ?>
            <br>
        </div>
    <?php endif ; ?>
</div>
<?php require "./php/footer.php"; ?>
<script>
function myFunction(x) {
  x.classList.toggle("change");
  let y = document.getElementById('links');
  y.classList.toggle("hide");
}
</script>
</body>