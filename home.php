<html>
 <head><title>TUM The Whole Welcome Memo</title>
<meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<style>
*{
margin:0; padding:0;
border-sizing: border-box;
text-transform: capitalize;
font-family:Verdana,Geneva,Tahoma,san-serif;
font-weight:normal;
}
body{
background:#eee;
}
.heading{
color:#444;
font-size:40px;
text-align:center;
padding:10px;
}
.container {
display:grid;
grid-template-columns:2fr 1fr;
grid-template-rows:1;
gap:15px;
align-items:flex-start;
padding:5px 5%;

}
.container .main-video{
background : #fff;
border-radius:5px;
padding:10px;

}

.container .main-video iframe{
width:100%;
border-radius:5px;
}

.container .main-video .title{
color:#333;
font-size:23px;
padding-top:25px;
padding-bottom:25px;
}
.container .video-list {
background : #fff;
border-radius : 5px;
height:500px;
overflow-y:scroll;
}
.container .video-list::webkit-scrollbar{
width:7px;
}
.container .video-list::webkit-scrollbar-track{
background: #ccc;
border-radius:50px;
}
.container .video-list::webkit-scrollbar-thumb{
background:#666;
border-radius:50px;
}

.container .video-list .vid iframe{
width:100px;
border-radius:5px;
}
.container .video-list .vid{
display:flex;
align-items:center;
gap:15px;
background:#f7f7f7;
border-radius:5px;
margin:10px;
padding:10px;
border: 1px solid rgba(0,0,0,0.1);
cursor:pointer;
}
.container .video-list .vid:hover{
 background:#eee;
}
.container .video-list .vid.active{
background:#2980b9;
}
.container .video-list .vid.active .title{
color:#fff;
}
.container .video-list .vid .title{
color: #333;
font-size:17px;
}

/* nonactive */ 


.container .video-list .vid:hover{
 background:#eee;
}
.container .video-list .vid.nonactive{
background:#eee;
}
.container .video-list .vid.nonactive .title{
color:#fff;
}
.container .video-list .vid .title{
color: #333;
font-size:17px;
}

/* nonactive */

@media (max-width :991px){
.container {
grid-template-columns: 1.5fr 1fr;
padding : 10px;
}
.main-video iframe{
height:400px;
}
}
@media (max-width :768px){
.container {
grid-template-columns:1fr;
}
.main-video iframe{
height:200px;
}
}

</style>
</head>
   <body>
<script>
let i = [];
function storeID(i){
let lastItem = i[i.length-1];
let activeColor = document.getElementById(i.length-1);
activeColor.classList.add('active');
let previousActive = document.getElementById(i[i.length]);
previousActive.classList.add('nonactive');
}

function encoding(idCode){


let vid = document.getElementById(idCode);


let src = vid.children[0].getAttribute('src');


let mainVideo = document.getElementById("main");


let mainSrc = mainVideo.children[0].getAttribute('src');


let activeVideo = document.getElementById('act'); 

let listVideo = document.querySelectorAll('.video-list .vid');


let title = vid.children[1].innerHTML;

let activeVid = document.querySelector(".vid");
activeVid.classList.remove("active");


mainVideo.children[0].src = src ;
mainVideo.children[1].innerHTML = title ;

i += " "+idCode;

storeID(i);

} 






</script>
<h3 class="heading">TUM MEMO</h3>
<div class="container">
<div class="main-video">
<div class="video" id="main">
<iframe class="responsive-iframe" id="MyFrame" src="https://drive.google.com/file/d/1RmYr7SaYZgWoWkUvAa1ZWd0RGJL3_xz3/preview" allow="autoplay" frameborder="0" allow="accelerometer; autoplay; clipboard-write;" allowfullscreen></iframe>
<h3 class="title">TUM The Whole Welcome Part-21 </h3>
</div>
</div>
<div class="video-list">
<div class="vid active" onclick="encoding(this.id)" id="act">
<iframe class="responsive-iframe" id="MyFrame" src="https://drive.google.com/file/d/1RmYr7SaYZgWoWkUvAa1ZWd0RGJL3_xz3/preview" allow="autoplay" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h3 class="title">TUM The Whole Welcome Part-21 </h3>
</div>
<div class="vid" onclick="encoding(this.id)" id="a">
<iframe class="responsive-iframe" id="MyFrame" src="https://drive.google.com/file/d/1QR5aE3rO0gmpUVy0J1WQFBRpW9wqGIwZ/preview" allow="autoplay" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h3 class="title">TUM The Whole Welcome Part-20 </h3>
</div>
<div class="vid" onclick="encoding(this.id)" id="b">
<iframe  class="responsive-iframe" id="MyFrame" src="https://www.youtube.com/embed/z6uTa3_6VK0" allow="autoplay" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h3 class="title">Khin Khin Htar Pyo -14 </h3>
</div>
<div class="vid" onclick="encoding(this.id)" id="c">
<iframe  class="responsive-iframe" id="MyFrame" src="https://www.youtube.com/embed/z6uTa3_6VK0" allow="autoplay" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h3 class="title">Khin Khin Htar Pyo -5 </h3>
</div>
<div class="vid" onclick="encoding(this.id)" id="d">
<iframe  class="responsive-iframe" id="MyFrame" src="https://www.youtube.com/embed/z6uTa3_6VK0" allow="autoplay" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h3 class="title">Khin Khin Htar Pyo -4 </h3>
</div>
<div class="vid" onclick="encoding(this.id)" id="e">
<iframe  class="responsive-iframe" id="MyFrame" src="https://www.youtube.com/embed/z6uTa3_6VK0" allow="autoplay" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h3 class="title">Khin Khin Htar Pyo -4 </h3>
</div>
<div class="vid" onclick="encoding(this.id)" id="f">
<iframe  class="responsive-iframe" id="MyFrame" src="https://www.youtube.com/embed/z6uTa3_6VK0" allow="autoplay" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h3 class="title">Khin Khin Htar Pyo -4 </h3>
</div>
<div class="vid" onclick="encoding(this.id)" id="g">
<iframe  class="responsive-iframe" id="MyFrame" src="https://www.youtube.com/embed/z6uTa3_6VK0" allow="autoplay" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h3 class="title">Khin Khin Htar Pyo -4 </h3>
</div>
<div class="vid" onclick="encoding(this.id)" id="h">
<iframe  class="responsive-iframe" id="MyFrame" src="https://www.youtube.com/embed/z6uTa3_6VK0" allow="autoplay" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h3 class="title">Khin Khin Htar Pyo -4 </h3>
</div>
<div class="vid" onclick="encoding(this.id)" id="i">
<iframe  class="responsive-iframe" id="MyFrame" src="https://www.youtube.com/embed/z6uTa3_6VK0" allow="autoplay" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h3 class="title">Khin Khin Htar Pyo -4 </h3>
</div>
<div class="vid" onclick="encoding(this.id)" id="j">
<iframe  class="responsive-iframe" id="MyFrame" src="https://www.youtube.com/embed/z6uTa3_6VK0" allow="autoplay" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h3 class="title">Khin Khin Htar Pyo -4 </h3>
</div>
<div class="vid" onclick="encoding(this.id)" id="k">
<iframe  class="responsive-iframe" id="MyFrame" src="https://www.youtube.com/embed/z6uTa3_6VK0" allow="autoplay" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h3 class="title">Khin Khin Htar Pyo -4 </h3>
</div>
</div>
</div>
</body>
</html>
