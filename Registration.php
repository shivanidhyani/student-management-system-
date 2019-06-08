<?php
	include('header.php');
?>

<style type="text/css">
	.box{
	position:relative;
	display:inline-block;
	float:left;
	margin:0 auto;
	margin-left:30px;															
	background-color:#363636;
	opacity:.7;
	color:#d3bed8;
	padding:20px;
	font-size:25px;
	font-family:Times New Roman;
	border-radius:20px;
	}
	.box input[type="text"]{
		width:200px;
		height:20px;
		border:1 solid black;
		font-color:black;
		border-radius:5px;
		-webkit-border-radius:5px;
		-o-border-radius:5px;
		-moz-border-radius:5px;	
		}
		.box input[type="date"]{
		width:200px;
		height:20px;
		border:1 solid black;
		font-color:black;
		border-radius:5px;
		-webkit-border-radius:5px;
		-o-border-radius:5px;
		-moz-border-radius:5px;	
		}

		.box input[type="pass"]{
		width:200px;
		height:20px;
		border:1 solid black;
		font-color:black;
		border-radius:5px;
		-webkit-border-radius:5px;
		-o-border-radius:5px;
		-moz-border-radius:5px;	
}

		.box input[type="SUBMIT"]{
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
.box select{
		width:200px;
		height:20px;
		border:1 solid black;
		font-color:black;
		border-radius:5px;
		-webkit-border-radius:5px;
		-o-border-radius:5px;
		-moz-border-radius:5px;	

}
</style>
<br>

<div class='box'>
<hr>
<form method='post' action='' enctype='multipart/form-data'>
<table>
<tr><td>Name.</td><td><input type='text' name='name' required></td><td>Image</td><td><input type='file' name='img' required></td></tr>
<tr><td>Father's Name.</td><td><input type='text' name='fname' required></td></tr>
<tr><td>Mother's Name.</td><td><input type='text' name='mname' required></td></tr>
<tr><td>Addhar no.</td><td><input type='text' name='ano' required></td></tr>
<tr><td>DOB.</td><td><input type='date' name='dob' required></td></tr>
<tr><td>Course </td><td><select name='course'><option>------</option>

<?php
include('dbcon.php');
		$qry1 = "Select * from course";	
		$qq=mysqli_query($con,$qry1);
		if ($qq)
		{
			while($row=mysqli_fetch_assoc($qq))
			{
				echo"<option value='".$row[ccode]."'>".$row[course]."</option>";
			}

		}
?>

</select>
</td>
<td>Semester</td><td><select name='sem'><option value="1st">1st</option><option value="2nd">2nd</option><option value="3rd">3rd</option><option value="4th">4th</option><option  value="5th">5th</option><option value="6th">6th</option value="7th"><option value="1st">7th</option value="8th"><option value="1st">8th</option></select></td></tr></tr>
<tr><td>Phone No.</td><td><input type='text' name='phone' required></td></tr>

<tr><td>Password</td><td><input type='pass' name='pass' required></td></tr>
</table>
<br>
<tr>
	<td colspan='2'>

<input type='SUBMIT' name='SUBMIT' value='SUBMIT' align='center' /></td></tr>
<hr>
</form>
</div>

<?php

	if(isset($_POST['SUBMIT']))
	{
		include('dbcon.php');

		$name = $_POST['name'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$dob = $_POST['dob'];
		$Course = $_POST['course'];
		$semester = $_POST['sem'];
		$phone = $_POST['phone'];
		$Addhar = $_POST['ano'];
		$Password =$_POST['pass'];
		$imgname= $_FILES['img']['name'];
		$tmpimgname= $_FILES['img']['tmp_name'];

		move_uploaded_file ($tmpimgname,"registrationimg / $imgname");

		$qry = "INSERT INTO `registration`(`name`, `fname`, `mname`, `dob`, `addhar`, `course`, `phone`, `sem`, `img`, `id`, `pass`) VALUES ('$name','$fname','$mname','$dob','$Addhar','$Course','$phone','$semester','$imgname','','$Password')";
		

		if (mysqli_query($con,$qry))
		{
			echo"<script>alert('Registration Successfull!!')</script>";
		}
		else{echo"error";}

	}

 ?>
