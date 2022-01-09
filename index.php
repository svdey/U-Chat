<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>login</title>
</head>
<body>
	<section class="container">
		<section class="row justify-content-center">
			<section class=" box panel panel-default border p-4  rounded">
				<div class="container mt-3">
					<h2 class="text-primary">U-Chat</h2>
					<br>
					<!-- Nav tabs -->
					<ul class="nav nav-tabs">
						<li class="nav-item ">
							<a class="nav-link active pr " data-toggle="tab" href="#home">Sign In</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link pr " data-toggle="tab" href="#menu1">Sign Up</a>
						</li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div id="home" class="container tab-pane active"><br>
							<div class=" spn text-center" role="alert">
								
							</div>
							<form >
								<div class="form-group">
									<label for="email">Email</label>
									<input type="email" class="form-control" name="email" placeholder="Enter email" required>
								</div>
								<div class="form-group">
									<label for="pwd">Password</label>
									<input type="password" class="form-control" name="pass" placeholder="Enter password"  required>
								</div>
								<button type="button" class="btn btn-primary btn-block  mb-3">Sign in</button>
							</form>
						</div>
						<!-- SignUp Start -->
						<div id="menu1" class="container tab-pane fade"><br>
							<div class=" spn text-center" role="alert">
								
							</div>
							<!-- <form action="php/reg.php" method="POST" > -->
								<div class="Sign_form">
									<form>
										<div class="form-group">
											<label for="name">Name</label>
											<input type="text" class="form-control" name="u_name" placeholder="Enter name" required >
										</div>
										<div class="form-group">
											<label for="email">Email</label>
											<input type="email" class="form-control" name="u_email" placeholder="Enter email" required >
										</div>
										<div class="form-group">
											<label for="pwd">Password</label>
											<input type="password" class="form-control" name="u_password" placeholder="Enter password"  required>
										</div>
										<div class="form-group">
											<label for="pwd">Confirm Password</label>
											<input type="password" class="form-control" name="c_password" placeholder="Confirm password" required >
										</div>
										<!-- <div class="form-group">
											<label for="img">Upload Image</label><br>
											<input type="file" name="img" id="img" accept="image/*" >
										</div> -->
										<button type="button" class="btn btn-success btn-block mb-3" >Sign up</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</section>
			</section>
		</section>
		
	</body>
	<script  src="js/login.js"></script>
	<script  src="js/reg.js"></script>
	</html>