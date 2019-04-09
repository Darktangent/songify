<?php 
include ("./includes/config.php");
include "./includes/classes/Account.php";
include "./includes/classes/Constants.php";
$account=new Account();
include "./includes/handlers/register-handler.php";

include "./includes/handlers/login-handler.php";

function getInputValue($name){
	if(isset($_POST[$name])){
		echo $_POST[$name];
	}
}

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to Songify!</title>
</head>
<body>
	<div id="inputContainer">
		<form id="loginForm" action="register.php" 
		method="POST">
				<h2>Login to your account</h2>
				<p>
					
					<label for="loginUsername">Username</label>
					<input type="text" name="loginUsername" 
					id="loginUsername" placeholder="e.g. bartSimposon" required></p>
				<p>
					<label for="loginPassword">Password</label>
					<input type="password" id="loginPassword" name="loginPassword" required></p>
					<button type="submit" name="loginButton">Login</button>
				
		</form>


		<form id="registerForm" action="register.php" 
		method="POST">
				<h2>Create your FREE account</h2>
				<p>
					<?php echo $account->getError(Constants::$usernameCharacters); ?>
					<label for="username">Username</label>
					<input type="text" name="username"  value="<?php getInputValue('username'); ?>" 
					id="username" placeholder="e.g. bartSimposon" required></p>
				<p>
					<?php echo $account->getError(Constants::$firstNameCharacters); ?>
					<label for="firstName">First Name</label>
					<input type="text" name="firstName"  value="<?php getInputValue('firstName');?>
					id="firstName" placeholder="e.g. bart" required></p>
				<p>
					<?php echo $account->getError(Constants::$lastNameCharacters); ?>
					<label for="lastName">Last Name</label>
					<input type="text" name="lastName"  value="<?php getInputValue('lastName');?>
					id="lastName" placeholder="e.g. Simpson" required></p>
				<p>
					<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
					<?php echo $account->getError(Constants::$emailInvalid); ?>
					<label for="email">Email</label>
					<input type="email" name="email"  value="<?php getInputValue('email');?>
					id="email" placeholder="e.g. bartSimposon@example.com" required></p>
				<p>
					<label for="email2">Confirm Email
					</label>
					<input type="email" name="email2" 
					id="email2" placeholder="e.g. bartSimposon@example.com" required></p>
				<p>
					<?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
					<?php echo $account->getError(Constants::$passwordNotAlphaNumberic); ?>
					<?php echo $account->getError(Constants::$passwordCharacters); ?>
					<label for="password">Password</label>
					<input type="password" id="password" name="password" required></p>
					<p>
					<label for="password2">Confirm Password</label>
					<input type="password" id="password2" name="password2" required></p>
					<button type="submit" name="registerButton">Register</button>
				
		</form>
		
	</div>
</body>
</html>