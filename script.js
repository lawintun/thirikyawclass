function myfunction(){
if ((document.getElementById("usn").value == "dawpyae")&&(document.getElementById("pwd").value == 192168128)) {
window.location.replace("home.php");
header("location: home.php");
}
else {
alert("you are wrong !");
}
} 

 (document).ready(function(){
  $('#hideshow').on('click', function(event) {        
     $('.content').toggle('show');
  });
});
$(document).ready(function(){
  $('#hideshow2').on('click', function(event) {        
     $('.content2').toggle('show');
  });
});


