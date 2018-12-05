<?php
	
	
	function Conexion()
	{
	   if (!($cn=mysqli_connect("localhost","root","","agenda2")))
	   {
		  echo "Error conectando a la base de datos.";
		  exit();
	   }	   
	   return $cn;
	   
	}	

?>