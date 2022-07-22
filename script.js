function myfunction(){
if ((document.getElementById("usn").value == "Memoria3")&&(document.getElementById("pwd").value == 192168128)) {
window.location.replace("home.php");
header("location: home.php");
}
else {
alert("you are wrong !");
}
} 

 
