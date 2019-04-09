<?php 
function sanitizeFormUsername($inputText){
	$inputText=strip_tags($inputText);
	$inputText=str_replace(" ","",$inputText);
	return $inputText;
}
function sanitizeFormString($inputText){
	$inputText=strip_tags($inputText);
	$inputText=str_replace(" ","",$inputText);
	$inputText=ucfirst(strtolower($inputText));
	return $inputText;
}
function sanitizeFormPassword
($inputText){
	$inputText=strip_tags($inputText);
	return $inputText;
}
// detect login button
if(isset($_POST['loginButton'])){
	// login button
}

if(isset($_POST['registerButton'])){
	// register button
	// sanitation routine
	$username=sanitizeFormUsername($_POST['username']);

	$firstName=sanitizeFormString($_POST['firstName']);
	$lastName=sanitizeFormString($_POST['lastName']);
	$email=sanitizeFormString($_POST['email']);
	$email2=sanitizeFormString($_POST['email2']);
	$password=sanitizeFormPassword($_POST['password']);
	$password2=sanitizeFormPassword($_POST['password2']);




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
					<label for="username">Username</label>
					<input type="text" name="username" 
					id="username" placeholder="e.g. bartSimposon" required></p>
				<p>
					<label for="firstName">First Name</label>
					<input type="text" name="firstName" 
					id="firstName" placeholder="e.g. bart" required></p>
				<p>
					<label for="lastName">Last Name</label>
					<input type="text" name="lastName" 
					id="lastName" placeholder="e.g. Simpson" required></p>
				<p>
					<label for="email">Email</label>
					<input type="email" name="email" 
					id="email" placeholder="e.g. bartSimposon@example.com" required></p>
				<p>
					<label for="email2">Confirm Email
					</label>
					<input type="email" name="email2" 
					id="email2" placeholder="e.g. bartSimposon@example.com" required></p>
				<p>
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