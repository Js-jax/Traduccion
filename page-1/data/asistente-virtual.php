<?php
//conectamos con el servidor
$conn=@mysqli_connect('localhost', 'root', '', 'del_campo');
//verificamos la conexión 
if(!$conn){
    echo"No se pudo conectar con el servidor";
}else{
    echo"emos encontrado la base de datos";
    $base=mysqli_select_db($conn, 'del_campo');
    if(!$base){
        echo"No se encontro la base de datos";
    }
}
// recuperar las variables
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje'];
//hacemos la sentencia de sql
$sql="INSERT INTO inf_cliente VALUES('$nombre',
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