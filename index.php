<?php

	include('header.php');

?>
<style>
ul{
	margin:0px;
	padding:0px;
	list-style:none;	
	
}
ul li{
	float:left;
	width:170px;
	height:40px;
	background-color:black;
	opacity:.7;
	line-height:40px;
	text-align:center;
	font-size:20px;
	margin-right:2px;
	z-index:100;
	position:relative;
}
ul li a{
	text-decoration:none;
	color:white;
	display:black;
	z-index:100;
	position:relative;
}
ul li a:hover{
	background-color:seagreen;
	z-index:100;
	position:relative;
}
ul li ul li{
	display:none;
	z-index:100;
	position:relative;
}
ul li:hover ul li{
	display:block;
	z-index:100;
	position:relative;
}
.slide {
	float:left;
	height:350px;
	margin :0 AUTOPX;
}
#outerbox{
	width:700px;
	overflow:hidden;
}
#sliderbox{
	position:relative;
	width:3500px;
	animation-name: jiya;
	animation-duration: 25s;
	animation-iteration-count:infinite;
}
#sliderbox img{
	float:left;
	z-index:50;
	position:relative;
}
@keyframes jiya{
	0%{left:0px;}
	20%{left:0px;}
	25%{left:-700px;}
	36%{left:-700px;}
	40%{left:-1400px;}
	56%{left:-1400px;}
	60%{left:-2100px;}
	76%{left:-2100px;}
	80%{left:-2800px;}
	96%{left:-2800px;}
	100%{}
	}
.box{
	float:right;
	width:400px;
	height:350px;
	margin :0 AUTOPX;
	margin-top:10px;
	margin-right:50px;
	padding:20px;
	background-color:BLACK;
	opacity:.7;
	color: #ffffff;
	font-weight:bolder;
	}
.box a{
text-decoration:none;
	font-family:Times New Roman;
	font size:70px;
	color:#ffffff;

}
</style>
</head>
<body>
<div class="nb">
	<ul>
		<li><a href="index.php">HOME</a></li>
		<li><a href="slogin.php">STUDENT LOGIN</a></li>
		<li><a href="login.php">ADMIN LOGIN</a></li>
		<li><a href="contact.php">CONTACT US</a></li>
  		<li><a>ABOUT US</a>
  			<ul>
		  		<li><a href="university.php">University</a></li>
				<li><a href="hnb.php">Late HNB</a></li>
				<li><a href="dev.php">Devloper</a></li>
  			</ul>
  		</li>
	</ul>	
</div><br><br><br><br>
<div class='slide'>
	<div id="outerbox">
		<div id="sliderbox">
		<img src="img/j1.jpg"/>
		<img src="img/j2.jpg"/>
		<img src="img/j3.jpg"/>
		<img src="img/j4.jpg"/>
		<img src="img/j5.jpg"/>
		
</div>
</div>
</div>
<div class="box"><hr>
<h2>OUR  RECENT  UPDATES:</h2><hr>
	<a href="Registration.php">Registration open for 2018 batch</a>
 </div>


</body>


