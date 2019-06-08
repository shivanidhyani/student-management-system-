<?php

	include('header.php');

	session_start();

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

.box input[type="button"]{
	width:200px;
	height:30px;
	border:0;
	font-family:Times New Roman;
	border-radius:5px;
	-webkit-border-radius:5px;
	-o-border-radius:5px;
	-moz-border-radius:5px;
	background-color:#d3bed8 ;
}
.box a{
	text-decoration:none;
	font-family:Times New Roman;
	color:#ffffff;
}
</style>
	<div class="box" Align="center">
<div align="center">
<img src="img/c.png"height="100px;" ></div>
<div>Students  Login</div>
<hr>
<br>
	<form method="post" action="" >
		<table>
			<tr><td>User Id</tr></td><tr><td><input type="text" name='userid'></td></tr>
			<tr><td>Password</tr></td><tr><td><input type="password" name='pass'></td></tr>
			<input type="hidden" value="intput given" name='login'>
			<td><h2 align="center"><input name="SUBMIT" type="SUBMIT" value="Log in"></h2></td>
		</table>
	</form>
	<hr>
	<div>
<a href="Registration.php"><input type="button"value="Registration" style="width:100px; float:left;"></a>
<a href="forget.php"><input type="button"value="forget password" style="width: 120px; float:right;"></a></div>
<br><hr>
</div>
<?php
	include('dbcon.php');

if(isset($_POST['SUBMIT']))
	{
		@$userid = $_POST['userid'];
		@$password = $_POST['pass'];
	
	$qry="SELECT * FROM `registration` WHERE `addhar` = '$userid' AND `pass` ='$password'";
	$run=mysqli_query($con,$qry);
	$row=mysqli_num_rows($run);
	if($row<1) 
	{
	echo"<script>alert('Userid & password not match!!')</script>";
	}
	else{
	$data=mysqli_fetch_assoc($run);
		
		$_SESSION ['uid']= $data['addhar'];
		echo "<<>>".$_SESSION['uid']."<<>>";
		header('location: function.php');
	}
}

?>
