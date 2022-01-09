	<?php
	session_start();
	if(empty($_SESSION['$email'])  == 'true' && $_SESSION['$status'] != 2) {
		header('Location: index.php');
	}
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<!-- <link rel="stylesheet" href="css/nav.css"> -->
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<title>Admin</title>
		<style>
		nav{
			width: 90%;
			margin: auto;
		}
		.bdy{
			width: 90%;
			margin: auto;
		}
		.dropdown-item:hover{
			background-color: #2574a9;
			color: snow;
		}
	</style>
</head>
<body >

	<section>
		<nav class="navbar navbar-dark mt-2" style="background-color: #2574a9;">

			<span class="navbar-text">
				<img src="https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_960_720.png" width="40" height="40" >  <?php echo strtoupper($_SESSION['$name']);?>
			</span>
			<div class="dropdown show pr-5" id="menu">
				<div class="pr-5">
					<a class="btn btn-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span><i class="fas fa-user-tie"></i></span>
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="#">profile</a>
						<a class="dropdown-item" href="#">settings</a>
						<a class="dropdown-item" href="home.php">home</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item " href="php/logout.php" id="signout" href="#">Sign out...</a>
					</div>
				</div>
			</div>
		</nav>
		<div class="bdy">
			<table class="table table-hover mt-3">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">User</th>
						<th scope="col">Email</th>
						<th scope="col">Levels</th>
						<th scope="col">Edit</th>
						<th scope="col">Delete</th>
					</tr>
				</thead>
				<tbody id="tableBody">
					
				</tbody>
			</table>
		</div>
	</section>
	<!-- <script src="js/admin.js"></script> -->
	
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- <script src="/js/nav.js" type="text/javascript" charset="utf-8" async defer></script> -->
<script src="js/admin.js"></script>

</html>

<!-- Asansol@1234 --><!-- Ssdey243# -->