<?php


//Get values passe from in login.php file
$sampleID =$_POST['sampleID'];
$TEM =$_POST['TEM'];
$SEM =$_POST['SEM'];

//to prevent mysql injection
$sampleID =stripcslashes($sampleID);
$TEM=stripcslashes($TEM);
$SEM=stripcslashes($SEM);


$sampleID =mysql_real_escape_string($sampleID);
$TEM =mysql_real_escape_string($TEM);
$SEM =mysql_real_escape_string($SEM);

//connect to the server and select database
mysql_connect("localhost","root","");
mysql_select_db("login");

$result=mysql_query("INSERT INTO sampledata VALUES ('$sampleID','$TEM','$SEM')");

//$result =mysql_query("select * from user where username='$username' and password='$password'")
//or die("Failed to quiry database".mysql_error());

$row = mysql_fetch_array($result);
if ($row['sampleID'] && $row['TEM']&& $row['SEM']){
	echo "Sample had been Saved!!".$row['username'];

	}else {
		echo "Failed to logIn" ;

		//try {} catch{Exception } {};



	}


?>