<?php

$server="localhost";//nombre del servidor de la bd
$user="root"; //usuario de la bd
$password="root"; //contraseña para ingresar a al bd
$basedatos="basededatospracticapdo";

try{
    $conn=new PDO("mysql:host=$server;dbname=$basedatos",$user,$password);//creamos la conexion la cual recibe los datos para usar la bd
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Conexion establecida con exito"."<br>";
    $sql="INSERT INTO alumnos(idalumno,alumno,email) VALUES(NULL,'Elizabeth Comstock','columbiasLamb@live.com')";//sentencia para insertar un dato a la bd
    $conn->exec($sql); //metodo para ejecutar la sentencia
    echo "Dato registrado con exito"."<br>";
    $id=$conn->lastInsertId();//regresamos el ultimo id insertado con el metodo lastInsertID()
    echo "Ultimo Id insertado: ".$id;//imprimimos el id

}catch(PDOException $error){
    echo "Error insertar"." ".$error->getMessage();
}

?>

