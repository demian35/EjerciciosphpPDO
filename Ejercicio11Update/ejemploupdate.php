<?php

$server="localhost";//nombre del servidor de la bd
$user="root"; //usuario de la bd
$password="root"; //contraseña para ingresar a al bd
$basedatos="basededatospracticapdo";

try{
    $conn=new PDO("mysql:host=$server;dbname=$basedatos",$user,$password);//creamos la conexion la cual recibe los datos para usar la bd
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Conexion establecida con exito"."<br>";
    //preparamos una sentencia con el metodo prepare() 
   $consulta=$conn->prepare("UPDATE alumnos SET alumno='Juan' WHERE idalumno=4");//preparamos la query para actualizar el dato con el nombre juan al id=4
   $consulta->execute();//ejecutamos la query

    echo "Datos actualizados";
}catch(PDOException $error){
    echo "Error insertar"." ".$error->getMessage();
}

?>
