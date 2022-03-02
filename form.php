<?php 
    
    require './data/conn.php';
    
    include './data/tabs.php';

    include './models/Program.php';
    include './data/programs.php';
    require './data/countries.php';

    $title = "Application | Visual Anthropology Center";
    $header2 = "APPLY TO ONE OF OUR PROGRAMS";
    require "./php/header.php";
?>
<div class="container">
<form action="apply.php" method="POST" class='form'>
    <input type="text" name="name" 
           placeholder="Full Name" 
           class='input' 
           required>
    <input type="email" name="email" 
           placeholder="Your Email Address" 
           class='input' required>
    <select name="country" 
            class='input' required>
           <option value="" disabled selected>
               Select your country
            </option>
        <?php foreach ($countries as $key => $country): ?>
           <option value="<?php echo $key; ?>">
                <?php echo $country; ?>
            </option> 
        <?php endforeach; ?>
    </select>
    <select name="program" class='input' required>
           <option value="" disabled selected>
               Select your program
            </option>
        <?php foreach ($programs as $key => $program): ?>
           <option value="<?php echo $key; ?>">
                <?php echo $program->getTitle(); ?>
            </option> 
        <?php endforeach; ?>
    </select>
    <textarea name="msg" cols="30" rows="10" class="input" 
              placeholder="Letter of Intent" required>
    </textarea>
    <input type="submit" value="Apply" 
           class='button btn-small select-none submit-center'>
</form>
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