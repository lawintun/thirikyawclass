
  function fun() {
  document.getElementById("sng").play();
}

function func() {

  document.getElementById("snd").play();
}


function myfunction(){
let uname = document.getElementById('uname').value;
let pwd = document.getElementById('pwd').value;
    if((uname === 'DawPyae192168') && (pwd === 'DawPyae192168')){ 
    window.location.replace("home.php");
  }
}
 
    else {
    alert("You need to fill valid password ! ");
      }
}  


