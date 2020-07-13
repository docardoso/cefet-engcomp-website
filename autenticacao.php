<?php
//ob_start();
session_start();

if(isset($_POST["matricula"])){
	$matricula = $_POST["matricula"];
	
	if( (substr($matricula, -4) == "GCOM") and  (substr($matricula, 0, 2) >= 14) and (strlen($matricula) == 11)){
		echo "ok";
	} else {
		echo "false";
	}
}

if(isset($_GET["matr"])){
	$matricula = $_GET["matr"];
	
if( (substr($matricula, -4) == "GCOM") and  (substr($matricula, 0, 2) >= 14) and (strlen($matricula) == 11)){		$_SESSION["username"] = $matricula;
	} 
	echo '<meta http-equiv="refresh" content=0;url="index.php">';
}

?>