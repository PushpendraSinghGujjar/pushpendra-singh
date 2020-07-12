<html>
<head>
     <link href="css\project.css" rel="stylesheet" type="text/css">
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
<div class="main" id="id01">
<?php
include_once 'header.php';
?>

<!-- <div class="nav">
<div class="home">
<a href="project.html" class="homesign">&equiv;</a>
</div>
<div class="options">
<a href="services.html">SERVICES</a>
<a href="#contact">CONTACT</a>
<button class="help" onclick="document.getElementById('id02').style.display='block'">HELP</button>
</div>
</div> -->
<div class="logo">
<div class="medcon">medCon</div>
<div class="sbar">
<form action="/action_page.php">
<input type="text" placeholder="Search...">
<button type="submit">&#x1F50D</button>
</form>
</div>
</div>
<div class="footer"></div>
</div>
<?php
include_once 'modal.php';
?>
<!-- The Modal
<div id="id02" class="modal">
     Modal Content
     <form class="modal-content animate" action="C:\Users\pushpendra singh\Desktop\check.php">
               <span onclick="document.getElementById('id02').style.display='none'"
               class="close" title="Close">&times;</span>
          <div class="title1">
               medCon help
          </div>
   
       <div class="container">
         <input type="text" placeholder="" name="uname" required>
   
         <button type="submit" class="login1">&#x1F50D</button>
       </div>
     </form>
   </div> -->
   
   
</body>

</html>
