<html>
<head> <title>www.searchstudent.royal</title>
<style>
body{
	background:purple;
}
h1{
	color:white;	
	font-size:50px;
	font-weight:bolder;

}
button{
		width:100%;
		font-size:20px;
		font-weight: bolder;

}
button a{
		color:black;
		text-decoration: none;
}
tr{
	color:white;
	font-size:30px;
	font-weight:bolder;
	
}

</style>
</head>
<body>
<h1 align=center>ROYAL STUDENTS DATA</h1><button><a href="first.html">GO BACK</a></button>
<hr>
<br><br><br>
<div class=table>
<table width=100% frame=void border=3 bordercolor=white cellpadding=5 cellspacing=7>
<tr align=center>
	<td>ID</td>
	<td>Name</td>
	<td>Fname</td>
	<td>Course</td>
	<td>Fees</td>
	<td>Mobile NO</td>
	<td>City</td>
</tr>
<tr align=center>
<?php
	$con=mysqli_connect("localhost","root","","royal");
	$sql="select * from students";
	$result=$con->query($sql);
	while($row=$result->fetch_array(MYSQLI_NUM))
{
	$id=$row[0];
	$name=$row[1];
	$fname=$row[2];
	$course=$row[3];
	$fees=$row[4];
	$mobileno=$row[5];
	$city=$row[6];

?>
	<td align=center><?php echo $id;?></td>
	<td align=center><?php echo $name;?></td>
	<td align=center><?php echo $fname;?></td>
	<td align=center><?php echo $course;?></td>
	<td align=center><?php echo $fees;?></td>
	<td align=center><?php echo $mobileno;?></td>
	<td align=center><?php echo $city;?></td>

</tr>
<?php }
	$con->close();
?>
</table></div>
</body>
</html>