<html>
<head>

</head>
<body>
	<?php

	$firstname = $lastname = $address = $contactno = $email = $password = $reenterpassword = "";
	$emailErr = $passwordErr = $reenterpasswordErr = "";
	if($_SERVER[""== $_POST]{
		$firstname = test_input($_POST["$firstname"]);
		$lastname = test_input($_POST["$lastname"]);
		$address = test_input($_POST["$address"]);
		$contactno = test_input($_POST["$contactno"]);
		if(Empty($POST["$email"])){
			$emailErr = "Email is required"; 
		}else{
			$email = test_input($_POST["$email"]);
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				$email = "Invalid email";
			}
		}
		
		if(Empty($_POST["$password"])){
			$passwordErr = "password is required";
		} else{
			$password = test_input($_POST["$password"]);
			
			}
		if(Empty($_POST["$reenterpasswod"])){
			$reenterpasswordErr = "re-enter password is required";
		}else{
			$reenterpassword = test_input($_POST["$reenterpassword"]);
			if($password == $reenterpassword){
				$register = "registerhere";
			}
		}
		

	}
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
	}
	<h2>Registration form</body>h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER[PHP_SELF])?>">
	First name: <input type="text" name="name">
	<br><br>
	Last name: <input type="text" name="lastname">
	<br><br>
	Address: <input type="text" name="address">
	<br><br>
	Contact no: <input type="text" name="contactno">
	<br><br>
	E-mail: <input type="text" name="email">
	<span class="error">*<?php echo $emailErr;?></span>
	<br><br>
	Password: <input type="password" name="password">
	<span class="error">*<?php echo $passwordErr;?></span>
	<br><br> 
	Re-enter Password: <input type="password" name="password">
	<input type="submit" name="submit" value="Register here">
	</form>
	</body>
</html>
