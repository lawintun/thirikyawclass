<html>
 <head><title>TUM The Whole Welcome Memo</title>
<meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</script>
  <link rel="stylesheet" href="common.css">
 <style>
.container {
  position: relative;
  overflow: hidden;
  width: 100%;
  padding-top: 56.25%; 
}

.responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
}
button{
    
    border: none;
    background-color: transparent; 
   color: #fff; 
   font-size: 30px; 
   border-radius:10px;
  background-color:rgba(0,0,0,0.1);
  box-shadow: 0 0 17px #fff;
text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>


</head>
   <body>
<script type="text/javascript" src="script.js">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<div class="container">
  <iframe class="responsive-iframe" id="myiframe" src="epione" allow="autoplay" style="width:100%;"></iframe>
</div>
<br /><br /><center>
<button onclick="toggle(this);">Change Movie</button>
</center>
<script>
  let toggle = button => {
    let element = document.getElementById("myiframe");
    let epione = "https://drive.google.com/file/d/1RmYr7SaYZgWoWkUvAa1ZWd0RGJL3_xz3/preview";
    let epitwo = "https://drive.google.com/file/d/1QR5aE3rO0gmpUVy0J1WQFBRpW9wqGIwZ/preview" ;

    if (element.src = epione) {
       button.innerText = "Episode (2)";
       element.src = epione;
    } els {
       button.innerText = "Episode (1)";
       element.src = epitwo; 
    }
  }
</script>

</body>
</html>
