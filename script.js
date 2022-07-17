
  function fun() {
  document.getElementById("sng").play();
}

function func() {

  document.getElementById("snd").play();
}


function myfunction(){
    if((document.getElementById('uname').value == 'DawPyae192168')&&( document.getElementById('pwd').value == 'Mikoyan35')) {
    window.location.replace("home.php");
}   else if (document.getElementById('uname').value != 'DawPyae192168'){
    alert("Username is invalid ! . \n");
 }
    else if(document.getElementById('uname').value == " "){
    alert("Username is empty ! .\n");
}
    else if (document.getElementById('pwd').value != 'Mikoyan35') {
    alert("Password is invalid ! .\n");
 }
    else {
    alert("You need to fill valid username and password ! .\n");
  }
}  


