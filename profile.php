<!DOCTYPE html>
<html>
<head>	
	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<link rel="stylesheet" href="../full-width-pics.css"/>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="../main.css"/>
</head>

<body>
	<!-- NAVIGATION BAR AND BURGER MENUE -->
	<nav class="navbar navbar-fixed-top navbar-dark bg-dark shadow navbar-expand-md">
		<div class="container">
			<a class="navbar-brand" href="index.php">Recipe book</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
				<!-- logged in user information -->
					<?php  if (isset($_SESSION['username'])) : ?>
						<li class="nav-item px-4 py-0" style="height: 20px"> 
							<a class="nav-link" href="index.php?logout='1'">Logout</a> 
						</li>
					<?php endif ?>
					<li class="nav-item active">
						<a class="nav-link" href="profile.php">Profile<span class="sr-only">(current)</span></a>
					</li>
					
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="container">
		<div class="row py-5">
			<div class="col-md-4">
				<img style="width: 200px" src="http://www.myiconfinder.com/uploads/iconsets/5d8cab7b01ffef290b73909d06d92705.png">
			</div>
			<div class="col-5">
				<table>
					<tr>
						<td><strong>Name: </strong></td>
						<td><? $_SESSION['username']?></td>
					</tr>
					<tr>
						<td><strong>Email: </strong></td>
						<td></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>