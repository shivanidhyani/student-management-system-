<?php
 
session_start();
if (isset($_SESSION['uid']))
{
	header('location:admin/admindash.php');
}
include('header.php');
?>
<style>
	.box{
	margin-top:50px;
	margin-left:40px;
	background-color:#020202;
	font-family:Times New Roman;
	opacity:.7;
	color:#ffffff;
	padding:40px;
	font-size:25px;
	width:20%;
	border-radius:20px;
}
.box input[type="password"]{
	border:1 solid black;
	font-color:black;
	font-family:Times New Roman;
	border-radius:5px;
	-webkit-border-radius:5px;
	-o-border-radius:5px;
	-moz-border-radius:5px;	
}
.box input[type="text"]{
	border:1 solid black;
	font-color:black;
	font-family:Times New Roman;
	border-radius:5px;
	-webkit-border-radius:5px;
	-o-border-radius:5px;
	-moz-border-radius:5px;
}
.box input[type="SUBMIT"]{
	width:150px;
	height:40px;
	border:0;
	border-radius:5px;
	font-family:Times New RomanS;
	-webkit-border-radius:5px;
	-o-border-radius:5px;
	-moz-border-radius:5px;
	background-color: skyblue;
}
</style>
</head>
<body>
<div class="box" align="center">
<hr>
<h2 align="center">ADMIN LOGIN</h2>
<hr>
<form method="post" action="login.php" align="center">
<table>
			<tr><td>User Id</tr></td><tr><td><input type="text" name='userid'></td></tr>
			<tr><td>Password</tr></td><tr><td><input type="password" name='pass'></td></tr>
			<input type="hidden" value="intput given" name='login'>
			<td><h2 align="center"><input name="SUBMIT" type="SUBMIT" value="Log in"></h2></td>
		</table>
</form><hr></div>
</body>
<?php
	include('dbcon.php');
	
	if(isset($_POST['login']))
	{
		$userid = $_POST['userid'];
		$password = $_POST['pass'];
	
	$qry="SELECT * FROM `admin` WHERE `username` = '$userid' AND `password` ='$password'";
	$run=mysqli_query($con,$qry);
	$row=mysqli_num_rows($run);
	
	if($row<1) 
	{
		echo"<script>alert('Userid & password not match!!')
		window.open('login.php','_self');
		</script>";
	}
	else{
	$data=mysqli_fetch_assoc($run);
		
		$id = $data['id'];
		
	
		$_SESSION['uid']=$id;
		
		header('location:admin/admindash.php');
	}
}
?>















