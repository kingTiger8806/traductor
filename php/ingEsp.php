<?php
	mysql_select_db($db,$link);
	require_once("longCar.php");
	if($longitud<20){
	$consulta = mysql_query("SELECT * FROM tinformacion where (ingles='$texto')", $link);
	if($row=mysql_fetch_array($consulta)){
		echo "<i>".$row["espanol"]."</i><br>";
	}
	else{
		echo "<script language='JavaScript' type='text/javascript'>";
		echo "alert('No se ha encontrado ning�n registro!');";
		echo "</script>";
	}
	}
	else{
		echo "<script language='JavaScript' type='text/javascript'>";
		echo "alert('Error - Caracteres m�ximos 20');";
		echo "</script>";
	}
	mysql_free_result($consulta);
?>