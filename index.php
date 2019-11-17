<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }

  require_once('comments.php');
?>
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
				</ul>
			</div>
		</div>
	</nav>

	
</div>

<!-- HEADER IMAGE -->
	<header class="py-5 bg-image-full" style="background-image: url('/Bilder/cooking.jpg');">
		<div class="row ml-5" style="height:400px">
			<h1 class="d-flex align-items-end" id="batch">My favorite recipes</h1>
		</div>
	</header>
	
	<!-- FIRST CONTENT -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6 my-5">
				<h3>My favorite recipes.</h3>
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
			</div>
			<div class="col-xs-12 col-md-6 my-5">
				<h3>Some pictures I drew.</h3>
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
			</div>	
		</div>
	</div>
	
	<!-- COOKING CONTENT -->
	<div class="container">
		<div class="row">
			<div class="col my-5 pt-5">
				<h3>Peanutbutter Rice</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<p id="ingredients">Ingredients</p>
				<table id="1">
					<tbody>
						<tr>
							<td class="pr-1" >1</td>
							<td> cups of rice</td>
						</tr>
						<tr>
							<td class="pr-1">1</td>
							<td> onions</td>
						</tr>
						<tr>
							<td class="pr-1">1.5</td>
							<td> large tomatoes</td>
						</tr>
						<tr>
							<td class="pr-1">1</td>
							<td> tbs peanut butter</td>
						</tr>
						<tr>
							<td class="pr-1"></td>
							<td> paprika powder</td>
						</tr>
						<tr>
							<td class="pr-1"></td>
							<td> salt</td>
						</tr>
						<tr>
							<td class="pr-1"></td>
							<td> pepper</td>
						</tr>
						<tr>
							<td class="pr-1"></td>
							<td> chilli powder</td>
						</tr>
					</tbody>
				</table>
				<p> For <input type="number" id="number_field" value="1" onClick="calculate(1, number_field)">servings.</p>
			</div>
			<div class="col-md-6 col-lg-4">
				<p id="ingredients">Instruction</p>
				<p>Cook rice according to instruction. I mostly use 3 cups of water and a little salt. <break/> 
				Chop onions and tomatoes. Fry onions. Add tomatoes and a splash of water to the pan. Turn down on medium heat and cover the pan with a lid. Add spices.
				Heat water in a water boiler. Add peanutbutter and a little water in a bowl. Stir until creamy. Add more water if needed. Combine everything and enjoy!
				</p>
			</div>
			<div class="col-xs-12 col-lg-4 offset-lg-1">
				<img class="img-fluid max-width:100% height:auto" src="/Bilder/peanut.jpg">
			</div>
		</div>
		
		<!-- Comment Section -->
		<div class="row pt-4">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-info">
					<div class="panel-body">
						<form id="comment" action="index.php" method="POST">
							<div class="form-group">
								<textarea name="comment" placeholder="Write your comment here!" class="pb-cmnt-textarea"></textarea>
								<input name="username" type="text" value="<?php echo $_SESSION['username']?>" hidden></input>
								<input name="recipe" type="text" value="1" hidden></input>
								<button name="submit_comment" class="btn btn-primary pull-right" type="submit">Share</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- Show Comments in Collapsible -->
		<div class="accordion mt-3" id="accordionExample">
			<div class="card">
				<div class="card-header" id="headingOne">
					<h2 class="mb-0">
						<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
						Show Comments
						</button>
					</h2>
				</div>

				<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
					<div class="card-body">
						<table class="table">
							<?php foreach($result_1 as $row): ?>
							<tr>
								<td><?php echo $row['username']; ?></td>
								<td><?php echo $row['comment']; ?></td>
								<?php if($row['username'] == $_SESSION['username']): ?>
									
									<!-- Trigger the modal with a button -->
									<td><button type="button" class="btn" data-toggle="modal" data-target="#myModal"><img src="https://img.icons8.com/ios-glyphs/24/000000/edit.png"></button></td>

									<form id="delete" action="index.php" method="POST">

										<input name="id" type="text" value="<?php echo $row['id']; ?>" hidden></input>
									
										<td> <button type="submit" name="delete_comment"> <img src="https://img.icons8.com/metro/26/000000/delete.png"> </button> </td>
									</form>
														
									<!-- Modal -->
									<div class="modal fade" id="myModal" role="dialog">
										<div class="modal-dialog">
										
											<!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header">
													<h3>Edit your comment here.</h3>
													<button type="button" class="close" data-dismiss="modal">&times;</button>
												</div>
												<div class="modal-body">
													<form id="modal_form" class="m-0 border-0" action="index.php" method="POST">
														<input type="text" name="updated_comment" value="<?php echo $row['comment']; ?>"></input>
														<button name ="update_comment" type="submit" class="btn btn-default">Save changes</button>
														<input name="id" type="text" value="<?php echo $row['id']; ?>" hidden></input>
													</form>
												</div>
											</div>
										</div>
									</div>

								<?php endif; ?>
							</tr>
							<?php endforeach; ?>
						</table>
					</div>
				</div>
			</div>
		</div>

		<!-- COOKING CONTENT -->
			<div class="row">
				<div class="col my-5 pt-5">
					<h3>Cherry Tomato Spaghetti</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-md-6 col-lg-3">
					<p id="ingredients">Ingredients</p>
					<table id="2">
						<tbody>
							<tr>
								<td class="pr-1" >25</td>
								<td> cherry tomatoes</td>
							</tr>
							<tr>
								<td class="pr-1">500</td>
								<td> gr spaghetti</td>
							</tr>
							<tr>
								<td class="pr-1">1</td>
								<td> tbs butter</td>
							</tr>
							<tr>
								<td class="pr-1"></td>
								<td> garlic powder</td>
							</tr>
							<tr>
								<td class="pr-1"></td>
								<td> salt</td>
							</tr>
							<tr>
								<td class="pr-1"></td>
								<td> pepper</td>
							</tr>
							<tr>
								<td class="pr-1"></td>
								<td> chilli powder</td>
							</tr>
						</tbody>
					</table>
					<p>For <input type="number" id="number_field" value="2" onClick="calculate(2, number_field)"> servings</p>
					</form>				
				</div>
			<div class="col-md-6 col-lg-4">
				<p id="ingredients">Instruction</p>
				<p>Cook spaghetti. Heat butter in pan, add garlic powder. Add tomatoes and cover with lid. Wait for 10mins and Smash tomatoes. Add a little extra oil. Mix spaghetti and sauce. Enjoy!</p>
			</div>
			<div class="col-xs-12 col-lg-4 offset-lg-1">
				<img class="img-fluid max-width:100% height:auto" src="/Bilder/Cherry.jpg">
			</div>
		</div>
		
		<!-- Comment Section -->
		<div class="row pt-4">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-info">
					<div class="panel-body">
						<textarea placeholder="Write your comment here!" class="pb-cmnt-textarea"></textarea>
						<button class="btn btn-primary pull-right" type="button">Share</button>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col my-5 pt-5">
				<h3>Basic Lasagna</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<p id="ingredients">Ingredients</p>
				<table id="3">
					<tbody>
						<tr>
							<td class="pr-1" ></td>
							<td> lasagna noodles</td>
						</tr>
						<tr>
							<td class="pr-1">2</td>
							<td> packs of purèed tomatoes</td>
						</tr>
						<tr>
							<td class="pr-1">300</td>
							<td> gr tofu</td>
						</tr>
						<tr>
							<td class="pr-1">2</td>
							<td> onions</td>
						</tr>
						<tr>
							<td class="pr-1"></td>
							<td> salt</td>
						</tr>
						<tr>
							<td class="pr-1"></td>
							<td> pepper</td>
						</tr>
						<tr>
							<td class="pr-1"></td>
							<td> chilli powder</td>
						</tr>
					</tbody>
				</table>
				<p>Ingredients for cheese:</p>
				<table id="4">
					<tbody>
						<tr>
							<td class="pr-1" >1</td>
							<td> tbsp nutritional yeast</td>
						</tr>
						<tr>
							<td class="pr-1">2</td>
							<td> tbsp flour</td>
						</tr>
						<tr>
							<td class="pr-1">1</td>
							<td> tbsp butter</td>
						</tr>
						<tr>
							<td class="pr-1">0.5</td>
							<td> tbsp salt</td>
						</tr>
						<tr>
							<td class="pr-1">1</td>
							<td> tsp mustard</td>
						</tr>
						<tr>
							<td class="pr-1">150</td>
							<td> ml water</td>
						</tr>
					</tbody>
				</table>
				<p class="py-3">
					For <input type="number" id="number_field" value="4"  onClick="calculate(3, number_field)"> servings</input>
				</p>				
			</div>
			<div class="col-md-6 col-lg-4">
				<p id="ingredients">Instruction</p>
				<p>Chop onions and grind tofu. Add to preheated pan and fry for a couple of minutes. Put together with puréed tomatoes. Stack lasagna plates and sauce in a baking dish. Add all cheese ingredients to a pot. Cook till condensed. Add to lasagna and bake in the oven for 20 minutes on 200°C. Enjoy!</p>
			</div>
			<div class="col-xs-12 col-lg-4 offset-lg-1">
				<img class="img-fluid max-width:100% height:auto" src="/Bilder/lasagna.jpg">
			</div>
		</div>
		
		<!-- Comment Section -->
		<div class="row pt-4">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-info">
					<div class="panel-body">
						<textarea placeholder="Write your comment here!" class="pb-cmnt-textarea"></textarea>
						<button class="btn btn-primary pull-right" type="button">Share</button>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col my-5 pt-5">
				<h3>African peanut stew</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<p id="ingredients">Ingredients</p>
				<table id="2">
					<tbody>
						<tr>
							<td class="pr-1" >1</td>
							<td> can coconut milk</td>
						</tr>
						<tr>
							<td class="pr-1">500</td>
							<td> gr spaghetti</td>
						</tr>
						<tr>
							<td class="pr-1">1</td>
							<td> can chopped tomatoes</td>
						</tr>
						<tr>
							<td class="pr-1">1</td>
							<td> onion</td>
						</tr>
						<tr>
							<td class="pr-1">1</td>
							<td> bellpepper</td>
						</tr>
						<tr>
							<td class="pr-1">1</td>
							<td> tbsp tomato paste</td>
						</tr>
						<tr>
							<td class="pr-1">1</td>
							<td> can chickpeas</td>
						</tr>
					</tbody>
				</table>
				<p class="py-3">
					For <input type="number" id="number_field" value="2"  onClick="calculate(4, number_field)"> servings</input>
				</p>				
			</div>
			<div class="col-md-6 col-lg-4">
				<p id="ingredients">Instruction</p>
				<p>Cook rice. Fry onions. Add everything else together and wait. Enjoy!</p>
			</div>
			<div class="col-xs-12 col-lg-4 offset-lg-1">
				<img class="img-fluid max-width:100% height:auto" src="/Bilder/african.jpg">
			</div>
		</div>

		<!-- Comment Section -->
		<div class="row py-4">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-info">
					<div class="panel-body">
						<textarea placeholder="Write your comment here!" class="pb-cmnt-textarea"></textarea>
						<button class="btn btn-primary pull-right" type="button">Share</button>
					</div>
				</div>
			</div>
		</div>

	</div>
		
	<!-- jQuery first, then Bootstrap JS. -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>	
	<script src="/calculate.js"></script>
	<script>
	function myFunction() {
	  alert($_SESSION['success']);
	}
	</script>
</body>
</html>