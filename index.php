<!DOCTYPE html>
<?php
session_start();
?>
<html lang="">
<head>
<meta charset="UTF-8">
<link href='http://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="Semantic-UI/semantic.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script>
$(document).ready(function(){

	$("#submit").click(function(){
		$.post( "submit.php", $( "#form1" ).serialize()).done(function(data) {
			alert("Data loaded: " + data);
		});
	});


	$("#askbutton").click(function(){
		$.post( "submit.php", $( "#form3" ).serialize()).done(function(data) {
			alert("Data loaded: " + data);
		});
	});
});

</script>

</head>

<body>
	<div class ="container">
		<div class ="ui grid column sixteen wide">
			<div class="column eight wide">
				<a href="index.html" id="logo"><img src="asset/logo.png" alt="logo" title="logo"/></a>
			</div>

			<div class="column eight wide" id="space1">
				<button type="submit" form="cpform" id="submit" class="ui primary button" onclick="submitform()" value="Submit">Submit</button>
				<a class="ui button" href="index.html">Cancel</a>
			</div>
		</div>
	</div>



		
<div class="ui grid column sixteen wide">
	<div class="column eight wide" id="space2">
		<div class="companyprofile">
			<form id="form1" class="formedit" action = "submit.php" method = "POST">
				<h5>Name</h5>
				<input id="name" class="resizer" name="name" autocomplete="on" required><br>
				<?php 
				if(isset($_SESSION["errorname"])){
					echo $_SESSION["errorname"];
                    $_SESSION["errorname"] = "";
				}
				?>

				<h5>Description</h5>
				<textarea name="description" class="textarearesizer" id="description" required></textarea>
				<?php 
				if(isset($_SESSION["errordesc"])){
					echo $_SESSION["errordesc"];
                    $_SESSION["errordesc"] = "";
				}
				?>				
			</form>




			<div class="address">
					<fieldset>
						<legend>Address</legend>
						<form method="get" class="formedit" id="form2" action="">
							<h5>Street</h5>
							<input id="street" class="resizer" name="street" autocomplete="on" required><br>
							<?php 
							if(isset($_SESSION["errorstreet"])){
								echo $_SESSION["errorstreet"];
			                    $_SESSION["errorstreet"] = "";
							}
							?>


							<h5>City</h5>
							<input id="city" class="resizer" name="city" autocomplete="on" required><br>

							<div class="ui grid column sixteen wide">
								<div class="column eight wide">
									<h5 class="space">Province</h5>
									<select class="ui dropdown">
									  <option value="0">Jakarta</option>
									  <option value="1">Jawa Barat</option>
									  <option value="2">Jawa Tengah</option>
									  <option value="3">Banten</option>
									</select><br>
								</div>


								<div class="column eight wide">
									<h5 class="space">Postal Code</h5>
									<input id="postalcode" class="form-input" name="postalcode" autocomplete="on" required><br>
									<?php 
									if(isset($_SESSION["errorpostal"])){
										echo $_SESSION["errorpostal"];
					                    $_SESSION["errorpostal"] = "";
									}
									?>

								</div>
							</div>
						</form>
					</fieldset>
			</div>
		</div>
	</div>

	<div class="column eight wide">
		<div class="ask">
			<fieldset>
				<legend>Ask Us</legend>
				<form method="POST" class="formedit" id="form3" action="submit.php">
					<h5>Divisions</h5>
					<select class="ui dropdown">
					  <option value="0">Technology</option>
					  <option value="1">Marketing</option>
					  <option value="2">Editorial</option>
					  <option value="3">Finance</option>
					</select>

					<h5>Name</h5>
					<input id="askname" class="resizer" name="askname" autocomplete="on" required><br>
					<?php 
					if(isset($_SESSION["errorname2"])){
						echo $_SESSION["errorname2"];
	                    $_SESSION["errorname2"] = "";
					}
					?>

					<h5>Questions</h5>
					<textarea name="question" id="question" class="textarearesizer" required></textarea><br>
					<?php 
					if(isset($_SESSION["errorquestion"])){
						echo $_SESSION["errorquestion"];
	                    $_SESSION["errorquestion"] = "";
					}
					?>

					<button type="submit" class="ui primary button" form="cpform" value="Submit" id="askbutton">Submit</button>
				</form>
			</fieldset>	
		</div>
	</div>
</div>

</body>

</html>