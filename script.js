
  function fun() {
  document.getElementById("sng").play();
}

function func() {

  document.getElementById("snd").play();
}


function runMyfunct(){  
var name=document.myform.uname.value;  
var password=document.myform.pwd.value;  
  
if (name==null || name==""){  
  alert("Name can't be blank !.\n");  
  return false;  
}

else if((name == "DawPyae192168")&&(password == "Mikoyan35")){
   window.location.replace("home.php");
   return true;
}

}else if(password.length<9){  
  alert("Password must be at least 9 characters long.");  
  return false;  
  }  
 else if (password == " "){
  alert ("password field can't be empty !.\n");
}
}  
