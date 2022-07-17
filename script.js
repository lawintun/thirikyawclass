
  function fun() {
  document.getElementById("sng").play();
}

function func() {

  document.getElementById("snd").play();
}


function runMyfunct(document.getElementById('uname').value, document.getElementById('pwd').value){    
var name = document.getElementById('uname').value;
var password = document.getElementById('pwd').value;
if (name==null || name==""){  
  alert("Name can't be blank !.\n");  
  return false;  
}

else if((name == "DawPyae192168")&&(password == "Mikoyan35")){
   window.location.replace("home.php");
   return true;


}else if(password.length<9){  
  alert("Password must be at least 9 characters long.");  
  return false;  
  }  
 else if (password == " "){
  alert ("password field can't be empty !.\n");
 return false;
}
}  
