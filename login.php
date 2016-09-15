<?php


	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	
	$signupEmailError = "";
	
	//kas on üldse olemas?
	if(isset ($_POST["signupEmail"])) {
		
		//oli olemas, ehk keegi vajutas nuppu
		if (empty($_POST["signupEmail"])) {
			
			//oli tõesti tühi
			$signupEmailError = "See väli on kohustuslik";
		
		}
	
	}
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Log in page</title>
	</head>
	<body>

		<h1>Log in</h1>
		
		<form method="POST">
		
		
		<input placeholder="E-mail" name="loginEmail" type="email">
		
		<br><br> 
		
		
		<input placeholder="Password" name="loginPassword" type="password">
		
		<br><br>
		<input type="submit" value="Log in">
		
		
		
	</form>
	
	<h1>Create user</h1>
		
		<form method="POST">
				
			<input placeholder="E-mail" name="signupEmail" type="email"> <?php echo $signupEmailError; ?>
		
			<br><br> 
			
			<input placeholder="Password" name="signupPassword" type="password">
		
			<br><br>
			
			<input type="submit" value="Create user">
		
		
		
		</form>
	
	</body>
</html>

