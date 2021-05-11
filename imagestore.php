
<?php
error_reporting(0);
?>
<?php
   $conn=mysqli_connect("localhost","root","","onlinemonitoring");
   if(!conn){
       echo "not connected";

   }
   else{
       echo "connected";
   }
   $img=$_FILES['choose']['name'];
   $img_temp=$_FILES['choose']['tmp_name'];
   $name=$_POST["Name"];
   $size=$_POST["size"];
   $sql="INSERT INTO dropimage (imagename,imagesize,imagestore) VALUES ('$name','$size','$img')";
   $result=mysqli_query($conn,$sql);
   move_uploaded_file($img_temp,"upload/$img");
   if(!result){
       echo "not inserted";
   }
   else{
       echo "inserted";
   }
   ?>