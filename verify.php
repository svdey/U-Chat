<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>login</title>
</head>
<style type="text/css">
body{
	margin-top: 6em;
}
img{
	height: 5em;
	width: 5em;
}
</style>
<body>
	<section class="container">
		<section class="row justify-content-center">
			<section class=" box panel panel-default border p-4  rounded">
				<div class="container mt-3">
					<div class="text-center">
						<img src="img/email.png">
					</div>
					<h2 class="text-center">Verify your email address</h2>
					<p class="text-center">Check your email : <span class="text-danger"><?php echo $_SESSION['$email'];?></p>
						<div class=" spn text-center" role="alert">
							
						</div>
						<div class="verify_form">
							<form>
								<div class="form-group">
									<label for="code">Enter the code</label>
									<input type="text" class="form-control" name="code" placeholder="Enter the code"  required>
								</div>
								<button type="button" class="btn btn-success btn-block  mb-3">Submit</button>
							</form>
						</div>
						
					</div>
				</section>
			</section>
		</section>
	</body>
	<script  src="js/verify.js"></script>
	</html>