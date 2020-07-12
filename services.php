<html>
   <head>
       <link href="css\services.css" rel="stylesheet" type="text/css">
       <script>
          // Get the modal
          var modal = document.getElementById('id02');
          
          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
            if (event.target == modal) {
              modal.style.display = "none";
            }
          }
          </script>

   </head>
   <body>
   <?php
include_once 'header.php';
?>

<?php
include_once 'modal.php';
?>
<!-- <div class="nav">
<div class="home">
          <span onclick="document.getElementById('id01').style.display='block'"
          class="homesign" title="home">&equiv;</span>
</div>
<div class="options">
<a href="services.html">SERVICES</a>
<a href="#contact">CONTACT</a>
<a href="#help">HELP</a>
</div>
</div> -->
   </body>



</html>