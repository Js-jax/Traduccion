<?php
//conectamos con el servidor
$conectar=@mysqli_connect('localhost', 'root', '');
//verificamos la conexión 
if(!$conectar){
    echo"No se pudo conectar con el servidor";
}else{

    $base=mysqli_select_db($conectar, 'prueba');
    if(!$base){
        echo"No se encontro la base de datos";
    }
}
// recuperar las variables
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje'];
//hacemos la sentencia de sql
$sql="INSERT INTO datos VALUES('$nombre',
                                '$correo',
                                '$mensaje')";
                                //ejecutamos la sentencia de sql
                                $ejecutar=mysqli_query($conectar,  $sql);
                                //verificamos la ejecución 
                                if(!$ejecutar){
                                    echo"Hubo algun error";
                                }else{
                                    echo "Datos guardados correctamente<br><a href='index.html'>Volver</a>";
                                }

?>