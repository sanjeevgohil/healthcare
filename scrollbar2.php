<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
	.divScroll {
	overflow:scroll;
	height:720px;
	width:500px;
}
</style>
</head>
<body>
<div class="divScroll">

<?php
	$cn = mysqli_connect("localhost","root","","health");
	$q = mysqli_query($cn,"select * from blog");
	echo "<table border=1 bordercolor='#FFFFFF' bgcolor='#C0C0C0'>"; 
	echo "<tr><td><b>Doctor Name</td><td><b>BLOG </td><td><b>Photo</td></tr>";
	while($r = mysqli_fetch_array($q))
	{
		echo "<tr><td>".$r[1]."</td><td>".$r[2]."</td><td><img src='./upload/".$r[3]."' width='100px' height='100px'></td></tr>";
	}
	echo "</table>";
?>

</div>
</body>
</html>