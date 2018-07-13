<?php
 session_start();
 $username=$_SESSION['username'];
 $type=$_SESSION['type'];
 if(!isset($_SESSION['permission']))
 {
   header("location:index.php?msg=no-access");
 }
 else
 {
  if ($type!='Admin')
   {
      
  }
  else
  {
    header("location:test.php");
  }
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
		  <a class="navbar-brand" href="#">Navbar</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
	      <a href="logout.php">
		      <button class="btn btn-lg btn-warning my-2 my-sm-0" style="border-radius: 0;padding: 10px 45px">Logout</button>
	      </a>
				<!-- <div class="bg-success">sdfs</div>	     -->
		    
		  </div>
		</nav>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="assets/images/leopard-05.jpg" alt="Second slide" style="height:90vh !important">
		    </div>
		    <div class="carousel-item ">
		      <img class="d-block w-100" src="assets/images/leopard-10.jpg" alt="First slide" style="height:90vh !important">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="assets/images/leopard-06.jpg" alt="Third slide" style="height:90vh !important">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<div class="container-fluid">
			<div class="row ">
				<div class=" col-sm-12 bg-white p-5" style="background-color: #eee !important;">
					<h2 class="text-theme-light">LEOPARD</h2>
					<p class="lead">
						It should not be a surprise that the biggest predators of these wonderful animals are humans. Sadly, these cats’ beauty is contributing to its decline towards extinction – demand for leopard fur and other body parts is driving a robust poaching market. In addition, hunting, habitat loss and retaliatory killings are additional pressures resulting in many of the Leopard subspecies teetering on the brink of disaster.

						These beautiful, solitary creatures deserve a chance to thrive in the wild. Let’s pass strong laws to end the illegal trade in leopard skins and other parts.
					</p>
				</div>
			</div>
		</div>
		<div style="width:98vw;">
			<img src="assets/images/leopard_final.jpg" style="width: inherit;">
		</div>
		<div class="container-fluid">
			<div class="row bg-white">
				<div class="container p-4">
					<h2 class="text-theme-light mt-2 mb-4 text-center">SAVE FROM EXTINCTION</h2>
					<p class="lead mb-5">
						
					The race against extinction is urgent and immediate, and the campaign to protect these endangered and exploited species needs your financial support and commitment.  Your support allows us to make an impact in saving endangered animals.  Funds raised will be used to support ballot measures, lobbying efforts, and other advocacy activities in support of laws protecting endangered species.

					Together, we can make a real difference in saving animals facing the threat of extinction.
					</p>
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