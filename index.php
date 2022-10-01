<!DOCTYPE html>
<html lang="en">
    
<!--?php
    $host='localhost';
    $usuariodb='root';
    $passwdb='12341234';
    $nombredb='db1';
    if (!($link=mysql_connect($host,$usuariodb,$passwdb)))
{
echo "Error conectando a la base de datos.";
exit();
}
if (!mysql_select_db($nombredb,$link))
{
echo "Error seleccionando la base de datos, verifique que el nombre de usuario utilizado este asociado a la base de datos.";
exit();
}
return $link;
}

$link=Conectarse();
echo "Conexión con la base de datos conseguida.
";
mysql_close($link); //cierra la conexion
    ?-->
<head>
    <title>EC2 Server Angel</title>
</head>
<body>
    <center><h5>Hola, Servidor EC2</h5></center>
    
</body>

</html>