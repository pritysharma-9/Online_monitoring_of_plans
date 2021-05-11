<html>
<head>
<link rel="stylesheet" type ="text/css" href ="">
</head>
<body>
<?php

  
  // do some validation here to ensure id is safe

  $link = mysqli_connect("localhost", "root", "","onlinemonitoring");
  
  $sql = "SELECT imagestore FROM dropimage WHERE imagename='drop.jpg'";
  $result = mysqli_query($link,$sql);
  $row = mysqli_fetch_array($result);
  
  
 
  ?>
  </body>
  </html>
  
  
