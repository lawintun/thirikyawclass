<html>
 <head><title>TUM The Whole Welcome</title>
<meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script type="text/javascript" src="script.js"></script>
  <link rel="stylesheet" href="style.css">
 </head>
   <body>
<?php
    header('X-Frame-Options: GOFORIT'); 
?>

<nav class="navbar">
     <!-- LOGO -->
     <div class="logo">MUO</div>
     <!-- NAVIGATION MENU -->
     <ul class="nav-links">
       <!-- USING CHECKBOX HACK -->
       <input type="checkbox" id="checkbox_toggle" />
       <label for="checkbox_toggle" class="hamburger">&#9776;</label>
       <!-- NAVIGATION MENUS -->
       <div class="menu">
         <li><a href="/">Home</a></li>
         <li><a href="/">About</a></li>
         <li class="services">
           <a href="/">Services</a>
           <!-- DROPDOWN MENU -->
           <ul class="dropdown">
             <li><a href="/">Dropdown 1 </a></li>
             <li><a href="/">Dropdown 2</a></li>
             <li><a href="/">Dropdown 2</a></li>
             <li><a href="/">Dropdown 3</a></li>
             <li><a href="/">Dropdown 4</a></li>
           </ul>
         </li>
         <li><a href="/">Pricing</a></li>
         <li><a href="/">Contact</a></li>
       </div>
     </ul>
   </nav>

<div class="container"> 
  <iframe class="responsive-iframe" src="https://drive.google.com/file/d/1QR5aE3rO0gmpUVy0J1WQFBRpW9wqGIwZ/preview" allow="autoplay"></iframe>
</div>
   </body>
</html>
