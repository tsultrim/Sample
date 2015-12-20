<?php

$username="";
$password="";
$invalid=false;
$open=false;
$terminate=false;
$imageResult="";
$message="";
$commandNum=0;

//to check the login credentials

if(isset($_POST['login'])){
	if((isset($_POST['username'])&&!empty($_POST['username']))&&(isset($_POST['password'])&&!empty($_POST['password']))){
		$username=$_POST['username'];
		$password=$_POST['password'];
	
if($username=='guest'&&$password=='guest123'){
		$_SESSION['username']=$username;
		header('Location: '.'home.html');
}
}else{
 $invalid==true;
}

}//end of php required for loginpage 


if(isset($_POST['logout'])){
	session_destroy();
	header('Location: '.'index.html');
}



?>