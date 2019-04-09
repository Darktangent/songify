<?php 
/**
 * 
 */
class Account
{
	private $errorArray;
	
	public function __construct()
	{
		# code...
		$this->errorArray=array();
		
	}
	public function register($username,$firstname,$lastname,$email,$email2,$password,$password2){
		$this->validateUsername($username);
		$this->validateFirstname($firstname);
		$this->validateLastname($lastname);
		$this->validateEmails($email,$email2);
		$this->validatePasswords($password,$password2);

		if(empty($this->errorArray)){
			// insert into DB
			return true;
		}else{
			return false;
		}

	}
	public function getError($error){
		if(!in_array($error, $this->errorArray)){
			$error="";
		}
		return "<span class='errorMessage'>$error</span>";
	}
	private function validateUsername($username){
		if(strlen($username)>25 || strlen($username)<5){
			array_push($this->errorArray,Constants::$usernameCharacters);
			return;
		}
		//todo: check if username exists
		

	}
	private function validateFirstname($firstname){
		if(strlen($firstname)>25 || strlen($firstname)<2){
			array_push($this->errorArray,Constants::$firstNameCharacters);
			return;
		}
		
	}
	private function validateLastname($lastname){
		if(strlen($lastname)>25 || strlen($lastname)<2){
			array_push($this->errorArray,Constants::$lastNameCharacters);
			return;
		}
		
	}
	private function validateEmails($em,$em2){
		if($em !=$em2){
			array_push($this->errorArray,Constants::$emailsDoNotMatch);
			return;
		}
		if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
		array_push($this->errorArray,Constants::$emailInvalid);
			return;
		}
		// todo check email in db
	}
	private function validatePasswords($pw,$pw2){
		if($pw!=$pw2){
			array_push($this->errorArray,Constants::$passwordsDoNotMatch);
			return;
		}
		if(preg_match('/[^A-Za-z0-9]/',$pw)){
			array_push($this->errorArray,Constants::$passwordNotAlphaNumberic);
			return;
		}
		if(strlen($pw)>30 || strlen($pw)<5){
			array_push($this->errorArray,Constants::$passwordCharacters);
			return;
		}
	}
}

 ?>

