<?php
session_start();
if(empty($_SESSION['$email'])  == 'true' && $_SESSION['$status'] != 1) {
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Home</title>
	<style>
	.dropdown-item:hover{
		background-color: #2574a9;
		color: snow;
	}
	.image{
		width: 5px;
		height: 5px;
	}
</style>
</head>
<body >
	<!-- || $_SESSION['$name'] -->
	<section>
		<div class="sidebar-container mt-3 ml-2">
			<div class="sidebar-logo ">
				U-chat
			</div>
			<ul class="sidebar-navigation">
				<li class="header">User List</li>
				<li>
					<a href="#">
						<img src="https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_960_720.png" width="40" height="40"> Sourav
					</a>
				</li>
				
			</ul>
		</div>

		<div class="content-container">

			<div class="container-fluid">
				<nav class="navbar navbar-dark" style="background-color: #2574a9;">

					<span class="navbar-text">
						<img src="https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_960_720.png" width="40" height="40">	      		<?php echo strtoupper($_SESSION['$name']);?>
					</span>
					<div class="dropdown show pr-5">
						<div class="pr-5">
							<a class="btn btn-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span><i class="fas fa-user-tie"></i></span>
								
							</a>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="#">profile</a>
								<a class="dropdown-item" href="#">settings</a>
								<!-- <a class="dropdown-item" href="#">admin</a> -->
								<div class="dropdown-divider"></div>
								<a class="dropdown-item " href="php/logout.php" id="signout">Sign out...</a>
							</div>
						</div>
					</div>
				</nav>

				<!-- Main component for a primary marketing message or call to action -->
				<div class="jumbotron">
					<div class="row my-chat">
						<div class="msg float-left">
							<span>Wassup dude!</span>
						</div>
					</div>
					<div class="row my-chat">
						<div class="msg float-right">
							<span>Wassup dude!</span>
						</div>
					</div>
				</div>

			</div>
		</div>

		
		
		
	</section>	
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- <script src="/js/nav.js" type="text/javascript" charset="utf-8" async defer></script> -->
</html>