<?php
class Conexion {
$servidor = "db1angel.co361bfxv0nr.us-east-1.rds.amazonaws.com";
$usuario = "root";
$contrasena = "12341234";
$based = "db1angel";
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