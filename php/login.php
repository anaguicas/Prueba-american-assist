<html><meta charset="utf-8">
<head>
    <link rel="stylesheet" href="estilos.css" type="text/css" />
</head> 
<?php

mysql_connect("localhost", "root", "") or die("No se pudo conectar: " . mysql_error());
mysql_select_db("biblioteca");

$aux=$_POST['usuario'];
$cuenta=mysql_query("SELECT * FROM usuarios WHERE user_name='$_POST[usuario]'");

$cue = mysql_fetch_array($cuenta);

if(!empty($_POST['usuario']) && !empty($_POST['password'])){
    
    if($cue['user_name']==$aux && $cue['contrasena']==$_POST['password']){
        session_start();
        include("../views/lista_libros.php");

    }else{
        echo "<script text/javascript>alert('Usted no tiene una cuenta, por favor cree una');window.location='index.php';</script>";
         }
}else{
    include("../index.html");
    echo "<script text/javascript>alert('Vuelva a ingresar los datos');window.location='index.php';</script>";
}
?>
</html>