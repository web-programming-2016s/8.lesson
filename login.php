<?php
	require_once("functions.php");
	
	//login button clicked
	if(isset($_GET["login"])){
		
		//login
		
		echo "logging in ...";
	
	//signup button clicked
	}else if(isset($_GET["signup"])){
		
		//signup
		
		echo "signing up ...";
		
		//the username and password are not empty
		if(!empty($_GET["username"]) && !empty($_GET["password"])){
			
			//save to db
			
			signup($_GET["username"], $_GET["password"]);
			
		}else{
			
			echo "both fields are rquired!";
			
		}
		
		
	}


?>



<h1>Log in</h1>
<form>
	
	<input type="text" placeholder="username" name="username">
	<input type="password" placeholder="password" name="password">
	
	<input type="submit" name="login" value="Log in">
	
</form> 


<h1>Sign up</h1>
<form>
	
	<input type="text" placeholder="username" name="username">
	<input type="password" placeholder="password" name="password">
	
	<input type="submit" name="signup" value="Sign up">
	
</form> 
