<html>
<head>
<title>images trial</title>
<link rel ="stylesheet" type="text/css" href="style2.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
<div class="title">
<h1><b><i>upload mines plans</i></b></h1>
</div>
<form  class ="main" action="imagestore.php" method="POST" enctype="multipart/form-data">
<div class="label1">
<label><h3>choose file</h3></label>
<input type="file" name="choose" class="form-control" required />
</div>
<div class="label2" >
<label><h3>write a file name/image name</h3></label>
<input type="text" name="Name" class="form-control" required />
</div>
<div class="label3" >
<label><h3>write the size </h3></label>
<input type="text" name="size" class="form-control" required />
</div>
<button  type="submit"  class="btn btn-primary"/><h4>submit</h4></button>
</form>

   </body>
   </html>
