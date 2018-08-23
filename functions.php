<?php
// function to sanitize userinputs
function validate_username($field){

	// Ssanitize username
	$field = filter_var(trim($field),FILTER_SANITIZE_STRING);

	// validate username
	// check if username contains letters and namespace
	if(filter_var($field, FILTER_VALIDATE_REGEXP, 
		array("options"=>array("regexp"=>"/^[a-zA-Z\s]+/")))){
	       return $field;
	   }else{
	       return false;
	   }
	
}



function validate_email($field){

	// sanitize email address
	$field = filter_var(trim($field),FILTER_SANITIZE_EMAIL);

	// validate email address
	if (filter_var($field,FILTER_VALIDATE_EMAIL)) {
		return $field;
	}else {
		return false;
	}

}

function validate_string($field){
	// sanitize string
	$field = filter_var(trim($field), FILTER_SANITIZE_STRING);

	if(filter_var($field, FILTER_VALIDATE_REGEXP, 
		array("options"=>array("regexp"=>"/^[a-zA-Z\s]+/")))){
	       return $field;
	   }else{
	       return false;
	   }
}

function emailExist($field)
{
	global $pdo;
	$statement = $pdo->prepare("SELECT * FROM contactus WHERE email =:uemail");
	$statement->bindParam(':uemail',$field);
	$statement->execute();
	$result = $statement->rowCount();
	if ($result > 0) {
		return $field;
	}else {
		return false;
	}
}

function usernameExist($field)
{
	global $pdo;
	$statement = $pdo->prepare("SELECT * FROM contactus WHERE username =:uname");
	$statement->bindParam(':uname',$field);
	$statement->execute();
	$result = $statement->rowCount();
	if ($result > 0) {
		return $field;
	}else {
		return false;
	}
}












?>