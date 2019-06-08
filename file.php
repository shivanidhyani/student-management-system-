<?php

$a = $_POST['name'];
$b = $_POST['fname'];
$c = $_POST['mname'];
$d = $_POST['ano'];
$e = $_POST['dob'];
$f = $_POST['phone'];
$g = $_POST['pass'];
$h = $_POST['userid'];
$i = $_POST['pass'];

mysql_connect('localhost','root');
mysql_select_db('project');
$j = "select name,fname,mname,dob,addhar from registration where phone=$h AND pass = $i";
$k = mysql_query($j);
while($row = mysql_fetch_array($k))
{
	echo "Name".$row[name]."<br/>";
	echo "Name".$row[fname]."<br/>";
	echo "Name".$row[mname]."<br/>";
	echo "Name".$row[dob]."<br/>";
	echo "Name".$row[addhar]."<br/>";
}
mysql_close();



?>