<?php
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
.box input[type="text"]{
	border:1 solid black;
	font-color:black;
	font-family:Times New Roman;
	border-radius:5px;
	-webkit-border-radius:5px;
	-o-border-radius:5px;
	-moz-border-radius:5px;
}
.box input[type="longtext"]{
	border:1 solid black;
	font-color:black;
	font-family:Times New Roman;
	border-radius:5px;
	-webkit-border-radius:5px;
	-o-border-radius:5px;
	-moz-border-radius:5px;
		}
	.box input[type="SUBMIT"]{
		width:200px;
		height:40px;
		border:0;
		border-radius:5px;
		-webkit-border-radius:5px;
		-o-border-radius:5px;
		-moz-border-radius:5px;
		background-color: skyblue;
		font-family:Times New Roman;
		}
</style>
	<div class="box">
		<form method='post' action='' enctype='multipart/form-data'>
			<table>
			<tr><td>NAME</tr></td><tr><td><input type="text" name="name" required></tr></td>
			<tr><td>PHONE NO</tr></td><tr><td><input type="text" name="phone" required></tr></td>
			<tr><td>MESSAGE</tr></td><tr><td><input type="longtext" name="msg" required ></tr></td>
			</table>
			<br>
			<tr><td colspan='2'><input type='SUBMIT' name='SUBMIT' value='SUBMIT' align='center' /></td></tr>
		</form>
    </div>

    <?php
    include('dbcon.php');

    if(isset($_POST['SUBMIT']))
	{
		$name= $_POST['name'];
		$phone=$_POST['phone'];
		$msg = $_POST['msg'];

		$qry= "INSERT INTO `cont`(`name`, `phone`, `msg`, `id`) VALUES ('$name','$phone','$msg','')";

		if (mysqli_query($con,$qry))
		{
			echo"<script>alert('Message sent successfully')</script>";
		}
		else{echo"Message not sent";}

	}


    ?>
