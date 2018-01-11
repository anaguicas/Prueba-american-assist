<?php

if(!empty($_GET)){
	$host="localhost";
	$user="root";
	$password="";
	$db="biblioteca";
	$con = new mysqli($host,$user,$password,$db);

	$sql = "UPDATE libros SET estado=\"prestado\" WHERE id=".$_GET["id"];
	echo $sql;
	
}
?>