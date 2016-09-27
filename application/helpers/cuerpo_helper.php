<?php

	/**
	 * Crea la parte superior del cuerpo HTML
	 * 
	 * 
	 * 
	 * */
   function ParteSuperior($titulo="", $estilos="", $scripts="", $metatag=""){
   	echo "<!DOCTYPE html>";
   	echo "<html>";   	
	echo "<head>";
	echo "<title>$titulo</title>";
	echo "<script>../Scripts/modernizr-custom.js</script>";
	echo $scripts;
	echo $estilos;
	echo $metatag;
	echo "</head>";
	echo "<body>";	
	echo "<header>";	
	echo "</header>";
	echo "<section id='Body'>";
   }
    
	
	/**
	 * Crea la parte Inferior del cuerpo HTML
	 * 
	 * 
	 * */  
   function ParteInferior($scripts=""){
   	echo "</section>";
	echo "<footer></footer>";
   	echo $scripts;
   	echo "</body>";	
   	echo "</html>";
   }
?>