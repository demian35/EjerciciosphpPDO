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
    $sql=$conn->prepare("INSERT INTO alumnos(idalumno,alumno,email) VALUES(NULL,:alumno,:email)");
    $sql->bindParam(":alumno",$nombre);//bindparam para enviar la referencia del nombre a la sentencia y registrar el dato
    $sql->bindParam(":email",$correo);

    //valores a agregar a la base de datos
    $nombre="Demian Jimenez";
    $correo="jdemian@gmail.com";
    $sql->execute();//executamos la sentencia

    $nombre="Demian Jimenez 2";
    $correo="jdem@gmail.com";
    $sql->execute();//executamos la sentencia

    $nombre="Demian Jimenez 3";
    $correo="jdemian23@gmail.com";
    $sql->execute();//executamos la sentencia


}catch(PDOException $error){
    echo "Error insertar"." ".$error->getMessage();
}

?>
