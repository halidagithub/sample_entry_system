<?php

//Get values passe from in login.php file
$username =$_POST['user'];
$password =$_POST['pass'];

//to prevent mysql injection
$username =stripcslashes($username);
$password =stripcslashes($password);
$username =mysql_real_escape_string($username);
$password =mysql_real_escape_string($password);

//connect to the server and select database
mysql_connect("localhost","root","");
mysql_select_db("login");

$result =mysql_query("select * from user where username='$username' and password='$password'")
or die("Failed to quiry database".mysql_error());

$row = mysql_fetch_array($result);
if ($row['username']==$username && $row['password']==$password){
	echo "Login success !! welcome".$row['username'];

	}else {
		echo "Failed to logIn" ;

		//try {} catch{Exception } {};



	}


?>