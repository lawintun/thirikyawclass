<html>
 <head><title>TUM The Whole Welcome Memo</title>
<meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</script>
  <link rel="stylesheet" href="common.css">
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
grid-template-columns: 2fr 1fr;
gap: 15px;
align-items : flex-start;
padding : 5px 5%;

}
.container .main-video{
background : #fff;
border-radius:5px;
padding:10px;

}

.containter .main-video .responsive-iframe{
width:100%;
border-radius:5px;
}

.containter .main-video .title{
color:#333;
font-size:23px;
padding-top:25px;
padding-bottom:25px;
}
.containter .video-list {
background : #fff;
border-radius : 5px;
height:520px;
overflow-y:scroll;
}
.containter .video-list::webkit-scrollbar{
width:7px;
}
.containter .video-list::webkit-scrollbar-track{
background: #ccc;
border-radius:50px;
}
.containter .video-list::webkit-scrollbar-thumb{
background:#666;
border-radius:50px;
}

.containter .video-list .vid .responsive-iframe{
width:100px;
border-radius:5px;
}
.containter .video-list .vid{
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


</style>
</head>
   <body>
<script type="text/javascript" src="script.js">

<h3 class="heading">TUM MEMO</h3>
<div class="container">
<div class="main-video">
<div class="video">
<iframe class="responsive-iframe" id="MyFrame" src="https://www.youtube.com/embed/z6uTa3_6VK0" allow="autoplay" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h3 class="title">Khin Khin Htar Pyo - 1 </h3>
</div>
</div>
<div class="video-list">
<div class="vid">
<iframe class="responsive-iframe" id="MyFrame" src="https://www.youtube.com/embed/z6uTa3_6VK0" allow="autoplay" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h3 class="title">Khin Khin Htar Pyo - 2</h3>
</div>
</div>
<div class="video-list">
<div class="vid">
<iframe class="responsive-iframe" id="MyFrame" src="https://www.youtube.com/embed/z6uTa3_6VK0" allow="autoplay" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h3 class="title">Khin Khin Htar Pyo - 3 </h3>
</div>
</div>
<div class="video-list">
<div class="vid">
<iframe  class="responsive-iframe" id="MyFrame" src="https://www.youtube.com/embed/z6uTa3_6VK0" allow="autoplay" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h3 class="title">Khin Khin Htar Pyo -4 </h3>
</div>
</div>
<div class="video-list">
<div class="vid">
<iframe  class="responsive-iframe" id="MyFrame" src="https://www.youtube.com/embed/z6uTa3_6VK0" allow="autoplay" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h3 class="title">Khin Khin Htar Pyo -5 </h3>
</div>
</div>
</div>
</body>
</html>
