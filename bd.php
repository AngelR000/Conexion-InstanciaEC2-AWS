<?php
class Conexion {
$servidor = "computaciondb.co361bfxv0nr.us-east-1.rds.amazonaws.com";
$usuario = "admin";
$contrasena = "AngeL-0108";
$based = "computaciondb";
$conn;

public function conectar() {
    $this->$conn = new mysqli(
            $this->$servidor, $this->$usuario, $this->$contrasena, $this->$based
    );
    if ($this->$conn->connect_errno) {
        echo "Fallo al contenctar a MySQL: (" . $this->$conn->connect_errno . ") " . $this->$conn->connect_error;
    }
    echo $this->$conn->host_info . "\n";
}
public function desconectar() {
    self::conectar();
    $this->$conn->close();
    }
}

?>