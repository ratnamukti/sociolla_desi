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
		var x = $("#name").val();
		var error = false;
		if(x==''){
			$("span#errname").html("*invalid input");
			error = true;
		}

		x = $("#description").val();
		if(x==''){
			$("span#errdesc").html("*invalid input");
			error = true;
		}

		x = $("#street").val();
		if(x==''){
			$("span#errstreet").html("*invalid input");
			error = true;
		}

		x = $("#city").val();
		if(x==''){
			$("span#errcity").html("*invalid input");
			error = true;
		}

		x = $("#postalcode").val();
		if(x==''){
			$("span#errpostal").html("*invalid input");
			error = true;
		}
		if(!error){
			$.post( "submit.php", $( "#form1" ).serialize()).done(function(data) {
				alert("Data loaded: " + data);
			});
		}
	});

	$("#send").click(function(){
		var x = $("#askname").val();
		var error = false;
		if(x==''){
			$("span#errname2").html("*invalid input");
			error = true;
		}

		x = $("#question").val();
		if(x==''){
			$("span#errquestion").html("*invalid input");
			error = true;
		}
		if(!error){
			$.post( "submit.php", $( "#form2" ).serialize()).done(function(data) {
				alert("Data loaded: " + data);
			});
		}		
	});


    $("#province_id").change(function(){
      $("#province_hidden").val(("#province_id").val());
    });

	$("#form2").submit(function(e){
    	return false;
	});

	$("#cancel").click(function(){
		$('#form1').find("input, textarea").val("");
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
				<button type="submit" form="cpform" id="submit" class="ui primary button" value="Submit">Submit</button>
				<a class="ui button" id="cancel" href="#">Cancel</a>
			</div>
		</div>
	</div>


		
<div class="ui grid column sixteen wide">
	<div class="column eight wide" id="space2">
		<div class="companyprofile">


			<form id="form1" class="formedit" action = "submit.php" method = "POST">
				<h5>Name</h5>
				<span class="errmsg" id="errname"></span><br />
				<input id="name" class="resizer" name="name" autocomplete="on" required><br>

				<h5>Description</h5>
				<span class="errmsg" id="errdesc"></span><br />
				<textarea name="description" class="textarearesizer" id="description" required></textarea>			


			<div class="address">
					<fieldset>
						<legend>Address</legend>

							<h5>Street</h5>
							<span class="errmsg" id="errstreet"></span><br />
							<input id="street" class="resizer" name="street" autocomplete="on" required><br>


							<h5>City</h5>
							<span class="errmsg" id="errcity"></span><br />
							<input id="city" class="resizer" name="city" autocomplete="on" required><br>

							<div class="ui grid column sixteen wide">
								<div class="column eight wide">
									<h5 class="space">Province</h5>
									<select name="province-y" id="province_id" class="ui dropdown">
									  <option value="Jakarta">Jakarta</option>
									  <option value="Jawa Barat">Jawa Barat</option>
									  <option value="Jawa Tengah">Jawa Tengah</option>
									  <option value="Banten">Banten</option>
									</select><br>
								</div>


								<div class="column eight wide">
									<h5 class="space">Postal Code</h5>
									<span class="errmsg" id="errpostal"></span><br />
									<input id="postalcode" class="form-input" name="postalcode" autocomplete="on" required><br>

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
				<form method="POST" class="formedit" id="form2" action="submit.php">
					<h5>Division</h5>
					<select name="division-x" id="division_id" class="ui dropdown">
					  <option value="Technology" selected>Technology</option>
					  <option value="Marketing">Marketing</option>
					  <option value="Editorial">Editorial</option>
					  <option value="Finance">Finance</option>
					</select>

					<h5>Name</h5>
					<span class="errmsg" id="errname2"></span><br />
					<input id="askname" class="resizer" name="askname" autocomplete="on" required><br>


					<h5>Questions</h5>
					<span class="errmsg" id="errquestion"></span><br />
					<textarea name="question" id="question" class="textarearesizer" required></textarea><br>

					<button type="submit" class="ui primary button" name='send' value="send" id="send">Send</button>
				</form>
			</fieldset>	
		</div>
	</div>
</div>

</body>
</html>