<?php
include('header.php');
include('dbcon.php');
session_start();
	$uid=$_SESSION['uid'];
$qry = "SELECT * FROM `student` WHERE `aadhar`='$uid'";
$run=mysqli_query($con, $qry);

if(mysqli_num_rows($run)>0)
{
	$data= mysqli_fetch_assoc($run);

?>
<style type="text/css">
.box{
	height:450px;
	width:800px;
	background-color:#464037;
	font-family:Times New Roman;
	color:#ffffff;
	padding:40px;
	font-size:15px;
	border-radius:20px;
}
.box input[type="text"]{
		width:200px;
		background-color: #464037;
		color:#ffffff;
		border: 0px;
		}
.logout input[type="button"]{
	width:100px;
	height:50px;
	border:0;
	border-radius:2px;
	-webkit-border-radius:5px;
	-o-border-radius:5px;
	-moz-border-radius:5px;
	background-color:#9b95a4;
}
.logout a{
	text-decoration:none;
}
.Result input[type="button"]{
	width:150px;
	height:50px;
	border:0;
	border-radius:1px;
	-webkit-border-radius:3px;
	-o-border-radius:3px;
	-moz-border-radius:3px;
	background-color:#9b95a4;
}
.Result a{
	text-decoration:none;
}
</style>
<div class="box">
	<hr>
	<form >
<table border="1" style="width:800px;"  >
	<tr>
		<th width="20%">Name :-</th>
		<td><input type='text' name='name' value="<?php echo $data['name']; ?>" required > </td>
		<td rowspan= "14" width="30%"> <img src="dataimg/<?php echo $data['img']; ?>" style="max-height: 350px;" /></td>
	</tr>
	<tr>
		<th>Father's Name :-</th>
		<td><input type='text' name='fname' value="<?php echo $data['fname']; ?>" required></td>
	</tr>
	<tr>
		<th>Mother's Name :-</th>
		<td><input type='text' name='mname' value="<?php echo $data['mname']; ?>" required></td>
	</tr>
	<tr>
		<th>Addhar no :-</th>
		<td><input type='text' name='ano' value="<?php echo $data['aadhar']; ?>" required></td>
	</tr>
	<tr>
		<th>Roll No :-</th>
		<td><input type='text' name='rollno' value="<?php echo $data['rollno']; ?>" required></td>
	</tr>
	<tr>
		<th>Enroll No :-</th>
		<td><input type='text' name='enrollno' value="<?php echo $data['enrollno']; ?>" required></td>
	</tr>
	<tr>
		<th>DOB :-</th>
		<td><input type='date' name='dob' value="<?php echo $data['dob']; ?>" required></td>
		</tr>
	<tr>
		<th>Categroy :-</th>
		<td><input type="select" name="ceto" value="<?php echo $data['ceto']; ?>"></td>
	</tr>
	<tr>
		<th>Course :-</th>
		<td> <input type="text" name='course' value="<?php echo $data['course']; ?>"></td>
		</tr>
	<tr>
		<th>Semester :-</th>
		<td> <input type="text" name='sem' value="<?php echo $data['sem']; ?>"></td>
	</tr>
	<tr>
		<th>Email :-</th>
		<td><input type='text' name='email' value="<?php echo $data['email']; ?>"required></td>
		</tr>
	<tr>
		<th>Phone No :-</th>
		<td><input type='text' name='mob' value="<?php echo $data['mob']; ?>" required></td>
	</tr>
	<tr>
		<th>Addresh :-</th>
		<td><input type='text' name='addresh' value="<?php echo $data['addresh']; ?>" required></td>
		</tr>
	<tr>
		<th>State :-</th>
		<td><input type='text' name='state' value="<?php echo $data['state']; ?>" required></td></tr>
	</table>
</form>
<input type="button" name="Save">
	<hr>
	<div class="logout" style="float:right;">
<a href="/project/logout.php"><input type="button"value="LOGOUT"></a>
</div>
<div class="Result" style="float:left;">
<a href="result/.php"><input type="button"value="Check Result"></a>
</div>
</div>
<?php

}
else{

	echo"<script>alert('You are not register!!')</script>";
}

?>
