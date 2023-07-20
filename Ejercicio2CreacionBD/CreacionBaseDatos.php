<?php

$server="localhost";//nombre del servidor de la bd
$user="root"; //usuario de la bd
$password="root"; //contraseña para ingresar a al bd

try{
    $conn=new PDO("mysql:host=$server",$user,$password);//creamos la conexion la cual recibe los datos para usar la bd
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Conexion establecida con exito"."<br>";
    $sql="CREATE DATABASE basededatospracticapdo";//sentencia para crear la base de datos
    $conn->exec($sql); //metodo para ejecutar la sentencia
    echo "Base de datos creada con exito";

}catch(PDOException $error){
    echo "Error al conectar".$error->getMessage();
}

?>