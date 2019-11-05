<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<link rel="stylesheet" href="Frontend/full-width-pics.css"/>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-10 offset-1">
				<h1> Welcome to my recipe book. In order to see the recipes, please log in.</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 offset-md-4 pt-5 mt-5 border border-dark rounded-lg">
				<form method="POST" id="form" action="Login/login.php">
				  <div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input name="username" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				  </div>
				  <div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				  </div>
				  <button type="submit" id="login" class="btn btn-primary border">Login</button>
				  <a href="Login/register.html" class="btn btn-default border">Register</a>
				</form>
				<p/>
				
				

				
			</div>
		</div>
	</div>

	<!-- jQuery first, then Bootstrap JS. -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script > document.getElementById("login").onclick = function() {
				document.getElementById("form").submit();}
				</script>
</body>
</html>