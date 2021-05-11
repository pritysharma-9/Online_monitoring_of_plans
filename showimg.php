<html>
	<head>
		<title>
			showimg
		</title>
	</head>
	<body style="background-color: #ffff;">
		<?php
		$conn=mysqli_connect("localhost","root","","onlinemonitoring");
$query="select * from dropimage";
 $show=mysqli_query($conn,$query);

while($row=mysqli_fetch_array($show))
{
	$img=$row['imagestore'];
	echo '<img src="data:image;base64,'.$img.'" height="100%" width="100%">';
	echo $row['imagename']; 
}





		?>
	</body>

</html>