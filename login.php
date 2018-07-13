<?php
	if(isset($_GET['msg'])){
		if($_GET['msg'] == 'login-error')
		echo "<script> alert('Username or password mismatch')</script>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Save A Leopard</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/fontawesome-free-5.1.0-web/css/all.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-theme">
  <a class="navbar-brand" href="index.php">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <a href="register.php">
      <button class="btn btn-lg btn-warning btn-login">
      	Register
    	</button>
    </a>
    <a href="login.php">
      <button class="btn btn-lg btn-success btn-login">
      	Login
    	</button>
    </a>
		<!-- <div class="bg-success">sdfs</div>	     -->
    
  </div>
</nav>

	<div class="container-fluid polaroid bg-white">
		<div class="row p-5">
			<div class="col-md-4 offset-md-4 polaroid  ">
				<div class="panel panel-success panel-body">
					<div class="col-lg-12 p-4">
						<div class="text-center text-theme-light mb-4">
							<h2><b>Log In</b></h2>
						</div>
						<form  method="post" action="action/action.php" role="form">
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" autofocus="autofocus" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value autocomplete="off"/>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" autocomplete="off"/>
							</div>
							<div class="form-group">
								<label class="checkbox-inline" for="remember"> 
									<input type="checkbox" name="remember" id="remember" value="1">	
									Remember Me
								</label>
							</div>
							<div class="form-group row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<a href="register.php" tabindex="6" class="form-control btn btn-primary">Register</a>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<input type="submit" name="login" id="login-submit" tabindex="4" class="form-control btn btn-success" value="Log In"/>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-12">
									<div class="text-center">
									<a href="" class="form-control btn btn-link">Forgot Password?</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>	

	<footer class="py-4 px-5 container-fluid text-theme-light">
		<div class="row">
			<div class="col-sm-4">
				<h3>SAVE A LEOPARD</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation.
					</p>
			</div>
			<div class="col-sm-5"></div>
			<div class="col-sm-3 text-theme-light" >
		      <h2>Stay Connected</h2>
		      <div class="mt25 pt10" style="">
		      	<!-- Enter your email address and stay connected -->
			      <input type="Email" placeholder="Email" class="px-1">
			      <input type="submit" value="SUBMIT" class="btn btn-sm btn-warning">
			      <div class="row py-3">
			      	<!-- <div class="col-sm-1"></div> -->
			      	<div class="col-sm-2">
				      	<i class="icon fab fa-facebook"></i>
			      	</div>
			      	<div class="col-sm-2">
			      		<i class="icon fab fa-twitter-square"></i>
			      	</div>
			      	<div class="col-sm-2">
				      	<i class="icon fab fa-google-plus-square"></i>
			      	</div>
			      	<div class="col-sm-2">
				      	<i class="icon fab fa-pinterest-square"></i>
			      	</div>
			      	<div class="col-sm-2">
				      	<i class="icon fas fa-rss-square"></i>
			      	</div>
			      	<div class="col-sm-1"></div>

			      </div>
		      </div>
		      <div>
		      	<i class=""></i>
		      </div>
		  </div>
		</div>
	</footer>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.js"></script>
</body>
</html>	