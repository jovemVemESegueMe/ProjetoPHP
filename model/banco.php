<?php
    $server = 'localhost';
    $username = 'ju_carvalh0';
    $password = '';
    
	$conect = mysql_connect($server,$username,$password);
	
	if($conect){
		echo "";
	}else{
		echo "não conectou";
	}
	
	$banco = 'mundo_animal';
	$OB = mysql_select_db($banco);
?>