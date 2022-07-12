<html>
 <head><title></title>
 <script>
  function fun() {
  document.getElementById("sng").play();
}
 </script>
  <link rel="stylesheet" href="style.css">
 </head>
   <body>
      <audio id="sng" loop>
        <source src="music.mp3">
      </audio>
   <button onclick="fun()" >PLAY</button>
   </body>
</html>
