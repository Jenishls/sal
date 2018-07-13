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
	<div class="container-fluid bg-white">
		<div class="row p-5">
			<div class="col-sm-3"></div>
			<div class="col-sm-6 polaroid p-4">

				<div class="panel panel-success panel-body ">

				<div class=" col-lg-12 ">
				<div class="text-center text-theme-light mb-4">
					<h2><b>Register</b></h2>
				</div>
					<form id="register-form" method="post" action="action/action.php" role="form">

						<div class=" row form-group has-feedback">
							<div class=" col-lg-6 col-md-6">
								<label for="fname">First Name</label>
								<span class="form-control-feedback input-validator-feedback" data-fieldname="fname"></span>

								<input type="text" required="required" name="fname" id="fname" tabindex="1" class=" form-control validate-input" autofocus="autofocus" placeholder="Firstname" autocomplete="off"/>
							</div>

							<div class="col-lg-6 col-md-6">
								<label for="lname">Last Name</label>
								<span class="form-control-feedback input-validator-feedback" data-fieldname="lname"></span>

								<input type="text" required="required" name="lname" id="lname" tabindex="1" class=" form-control validate-input" placeholder="Lastname" autocomplete="off"/>
							</div>
						</div>	
						
						<div class="form-group has-feedback">
							
							<label for="username">Username</label>
							<span class="form-control-feedback input-validator-feedback" data-fieldname="username"></span>
							<input type="text" required="required" name="username" id="username" tabindex="1" class=" form-control validate-input" placeholder="Username" autocomplete="off"/>
						</div>
						<div id="mydiv"></div>
						<div class="form-group has-feedback">
							<label for="email">Email Address</label>
							<span class="form-control-feedback input-validator-feedback"  data-fieldname="email"></span>
							
							<input type="text" name="email" id="email" tabindex="2" required="required" class="form-control validate-input" placeholder="Email Address" autocomplete="off"/>
						</div>
							<div class="form-group">
								<label for="password">Password</label>

								<input type="password" name="password" id="password" required="required" tabindex="3" class="form-control" placeholder="Password" autocomplete="off"/>
							</div>
							<div class="form-group">
								<label for="confirm-password">Confirm Password</label>

								<input type="password" name="confirm-password" required="required" tabindex="4" id="confirm-password" class="form-control" placeholder="Confirm Password" autocomplete="off"/>
							</div>
							<div id="matchPassword"></div>

						<div class="form-group">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<a href="signup.php" tabindex="6" class="form-control btn btn-primary">
										Log In
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<input type="submit" name="register" id="register-submit" tabindex="5" class="form-control btn btn-success" value="Register"/>
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
	<script src="assets/js/main.js"></script>
	<script>
		$('#username').on('keyup',function(){
			let data = $(this).val();
			sendAjax('checkUsername.php',data,'GET',function(resp){
				if(resp==true)
				{
					$('#register-submit').attr('disabled','disabled');
					$('#matchPassword').addClass('alert alert-danger').text('Username already exist, choose another username to proceed');
				}
				else{
					$('#register-submit').removeAttr('disabled');
					$('#matchPassword').removeClass('alert alert-danger').empty();	

				}

			})
		});

		$('#confirm-password').on('keyup',function(){
			let one = $('#password').val();
			let two = $(this).val();
			if(one != two){
				$('#register-submit').attr('disabled','disabled');
				$('#matchPassword').addClass('alert alert-danger').text('Password mismatch!!!');
			}
			else{
				$('#register-submit').removeAttr('disabled');
					$('#matchPassword').removeClass('alert alert-danger').empty();						
			}
		});
	</script>

</body>
</html>	