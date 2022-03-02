<?php 
    $title = "Contact | Visual Anthropology Center";
    $header2 = "CONTACT";
    require "./php/header.php";
?>

<segment>
    <div class='container'>
        <p>Address: Solunska 23/44, 11000 Belgrade, Serbia</p>
        <p>Phone: <a href="tel:+38169606321">+38169606321</a></p>
        <p>Email: <a href="mailto: info@visualanthropologycenter.com">info@visualanthropologycenter.com</a></p>
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="600" height="500" id="gmap_canvas" 
                    src="https://maps.google.com/maps?q=Solunska%2023/44,%2011000%20Belgrade,%20Serbia&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                </iframe>
            </div>
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