<?php

$server="localhost";//nombre del servidor de la bd
$user="root"; //usuario de la bd
$password="root"; //contraseña para ingresar a al bd
$basedatos="basededatospracticapdo";

try{
    $conn=new PDO("mysql:host=$server;dbname=$basedatos",$user,$password);//creamos la conexion la cual recibe los datos para usar la bd
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Conexion establecida con exito"."<br>";
    $sql="CREATE TABLE alumnos(
        idalumno INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        alumno VARCHAR(300) NOT NULL,
        email VARCHAR(300) NOT NULL
    )";//sentencia para crear la TABLA alumnos
    $conn->exec($sql); //metodo para ejecutar la sentencia
    echo "Tabla creada con exito";

}catch(PDOException $error){
    echo "Error al conectar".$error->getMessage();
}

?>