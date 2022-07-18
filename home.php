<html>
 <head><title>TUM The Whole Welcome Memo</title>
<meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</script>
  <link rel="stylesheet" href="common.css">
<link rel="stylesheet" href="style.css">
 </head>
   <body>
<script type="text/javascript" src="script.js">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<body>
<div class="container"> 
  <iframe class="responsive-iframe" id="myframe" src="https://drive.google.com/file/d/1QR5aE3rO0gmpUVy0J1WQFBRpW9wqGIwZ/preview" allow="autoplay" style="height:450px;width:100%;"></iframe>
</div>
<iframe id="myiframe" src="https://en.wikipedia.org" style="height:450px;width:100%;"></iframe>

<br /><br />
<button onclick="toggle(this);">Hide Iframe</button>

<script>
  let toggle = button => {
    let element = document.getElementById("myiframe");
    let hidden = element.getAttribute("hidden");
    
    if (hidden) {
       element.removeAttribute("hidden");
       button.innerText = "Hide Iframe";
    } else {
       element.setAttribute("hidden", "hidden");
       button.innerText = "Show Iframe";
    }
  }
</script>

</body>
</html>
