<?php  include('server.php')  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css">

  
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
  <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../index.html">Home</a></li><nav id="navbar" class="navbar">
        <ul>
  <form method="post" action="login.php">
  	<?php /*include('errors.php'); */?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>