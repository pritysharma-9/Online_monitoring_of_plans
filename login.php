
<html>
<head>
<title>LOGIN AND SIGNUP</title>
<link rel ="stylesheet" type="text/css" href="style1.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
<div  class="container">
<div class="login-box">
  <div class="row">
<div class="col-md-6 login-left " >
<h2 style="color:darkred; ">register here:</h2>
<form action ="" method="post">
<div class="form-group">
<label><h3>username:</h3></label>
<input type ="text" name="username" class="form-control" required>
</div>
<div class="form-group">
<label><h3>email-id:</h3></label>
<input type ="email" name="email" class="form-control" required>
</div>
<div class="form-group">
<label><h3>password:</h3></label>
<input type ="password" name="password" class="form-control" required>
</div>
<button style="color:green;" type="submit" class="btn btn-primary"><h4>register</h4></button>
</form>
</div>
</div>

<div class="col-md-6 login-right">
<h2  style="color:darkred;"> login here:</h2>
<form action="validation.php" method="post">
<div class="form-group">
<label><h3>username:</h3></label>
<input type="text" name="user1" class="form-control" required>
</div>
<div class="form-group">
<label><h3>password:</h3></label>
<input type="password" name="password1" class="form-control" required>
</div>
<button  style ="color:green ;" type="submit" class="btn btn-primary"><h4>login</h4></button>
</form>
</div>

  </div>
</div> 
</body>
</html>
