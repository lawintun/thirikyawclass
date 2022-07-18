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
button, select{
    
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
<iframe  width="560" height="315" class="responsive-iframe" id="MyFrame" src="https://www.youtube.com/embed/z6uTa3_6VK0" allow="autoplay" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<center>
<select id="MySelectMenu">
  <option value="https://drive.google.com/file/d/1RmYr7SaYZgWoWkUvAa1ZWd0RGJL3_xz3/preview">Episode 21</option>
  <option value="https://drive.google.com/file/d/1QR5aE3rO0gmpUVy0J1WQFBRpW9wqGIwZ/preview">Episode 20 </option>
</select>
<button onClick="newSrc();">Change Iframe Src</button>
</center>

<script>
  function newSrc() { var e = document.getElementById("MySelectMenu"); var newSrc = e.options[e.selectedIndex].value; document.getElementById("MyFrame").src=newSrc; }
</script>

</body>
</html>
