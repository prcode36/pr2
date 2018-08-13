<?php   

try{
	
	$base = new PDO('mysql:host=localhost; dbname=praxis', 'root', '');
	
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$base->exec("SET CHARACTER SET UTF8");
	
}catch(exception $e){
	
	die('error' . $e->getMessage());
	echo "Linea del error" . $e->getLine();
	   
	   
}


?>