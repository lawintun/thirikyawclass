<html>
 <head><title>TUM The Whole Welcome Memo</title>
<meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script type="text/javascript" src="script.js"></script>
  <link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
   <body>
<?php
    header('X-Frame-Options: GOFORIT'); 
?>
/*
<?php
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];
$error = " ";
$success = " ";
if (isset($_POST['submit'])){
   if ( $uname == "Dawpyae192168" ) {
       if ( $pwd == "Mikoyan35smt") {
            $error = "  ";
            $success = "Welcome To My Page" ; 
           
      }

       else { 
        $error =" Invalid Password ! ";
        $success = " ";
   }
}
    else {
        $error = "Invalid Username ! ;
        $success = " "; 
    }
}
?>
*/

<div class="login-box">
  <h2>The Whole Welcome Memo</h2>
 /* <p class="error"><?php echo $error ?></p><p class="success"><?php echo $success ?></p>*/
  <form method="post">
    <div class="user-box">
      <input type="text" name="uname" required>
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="pwd" required>
      <label>Password</label>
    </div>
    <a href="#" name = "submit" >
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </a>
  </form>
</div>

   </body>
</html>
