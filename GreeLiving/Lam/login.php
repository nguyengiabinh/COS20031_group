<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>business name</label>
  		<input type="text" name="businessname" >
  	</div>
  	<div class="input-group">
  		<label>business id</label>
  		<input type="text" name="businessid" >
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
	  <button type="button" class="cancelbtn">Cancel</button><br>

	  <label> 
  <input type="checkbox" checked="checked" name="remember"> Remember me
  </label>
  </div>
  <div class="container" style="background-color:#f1f1f1">
  <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
  </form>
</center>
</body>
</html>