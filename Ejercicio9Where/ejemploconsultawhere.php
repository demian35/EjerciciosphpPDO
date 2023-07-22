<?php

$server="localhost";//nombre del servidor de la bd
$user="root"; //usuario de la bd
$password="root"; //contraseña para ingresar a al bd
$basedatos="basededatospracticapdo";

try{
    $conn=new PDO("mysql:host=$server;dbname=$basedatos",$user,$password);//creamos la conexion la cual recibe los datos para usar la bd
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Conexion establecida con exito"."<br>";
    //preparamos una sentencia con el metodo prepare() en ligar de usar ? como en msqli usamos referencias :alumno
   $consulta=$conn->prepare("SELECT * FROM alumnos WHERE idalumno>7");//preparamos la query y le especificamos que nos regrese los ids mayores a 7 con where
   $consulta->execute();//ejecutamos la query

   $resultados=$consulta->fetchAll();//regresamos los resultados de la query

   foreach($resultados as $alumnos){
    echo "id :".$alumnos['idalumno']."Nombre : ".$alumnos['alumno']."Correo electronico: ".$alumnos['email']."<br>";
   }
}catch(PDOException $error){
    echo "Error insertar"." ".$error->getMessage();
}

?>
