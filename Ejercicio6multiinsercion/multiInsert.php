<?php

$server="localhost";//nombre del servidor de la bd
$user="root"; //usuario de la bd
$password="root"; //contraseña para ingresar a al bd
$basedatos="basededatospracticapdo";

try{
    $conn=new PDO("mysql:host=$server;dbname=$basedatos",$user,$password);//creamos la conexion la cual recibe los datos para usar la bd
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Conexion establecida con exito"."<br>";
    $conn->beginTransaction();//beginTransaction Metodo que nos permitira inicializar multiples operaciones sql
    $sql="INSERT INTO alumnos(idalumno,alumno,email) VALUES(NULL,'Fulanita g','fulanita@live.com')";//sentencia para insertar un dato a la bd
    $conn->exec($sql);
    $sql="INSERT INTO alumnos(idalumno,alumno,email) VALUES(NULL,'Jose so','jose@live.com')";
    $conn->exec($sql);
    $sql="INSERT INTO alumnos(idalumno,alumno,email) VALUES(NULL,'Carl Johnson','cj@live.com')";
    $conn->exec($sql); //metodo para ejecutar la sentencia
    $conn->commit();//commit() metodo que ejecutara las sentencias sql listadas  en el begin
    echo "Datos registrado con exito"."<br>";
   

}catch(PDOException $error){
    $conn->rollBack();//rolback metodo que permite deshacer las multioperaciones si llega a ocurrir un error
    echo "Error insertar"." ".$error->getMessage();
}

?>

