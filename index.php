<!DOCTYPE html>
<html lang="en">

<head>
    <title>EC2 Server Angel</title>
</head>

<body>
<?php
class Conexion {
$servidor = "computaciondb.co361bfxv0nr.us-east-1.rds.amazonaws.com";
$usuario = "admin";
$contrasena = "AngeL-0108";
$based = "ejemplo";
$conn;

public function conectar() {
    $this->conn = new mysqli(
            $this->servidor, $this->usuario, $this->contrasena, $this->based
    );
    if ($this->conn->connect_errno) {
        echo "Fallo al contenctar a MySQL: (" . $this->conn->connect_errno . ") " . $this->conn->connect_error;
    }
    echo $this->conn->host_info . "\n";
}
public function desconectar() {
    self::conectar();
    $this->conn->close();
    }
}
$ejemplo = new Conexion();
$ejemplo->conectar();

?>

    <center><h5>Hola, Servidor EC2</h5></center>
</body>

</html>