<?php

class BDConexion {
    
    private $mySQLI;
    private $sql;
    private $result;
    private $filasAfectadas;
    private $usuarioId;
    
    public function Abrir() {
        $this-> mySQLI = new mysqli("localhost","root","","tienda_virtual");
        if (mysqli_connect_error()){
            return 0;
        }
        else {
            return 1;
        }
    }
    
    public function Cerrar() {
        $this->mySQLI->close();
    }
    
    public function consulta($sql) {
        $this->sql = $sql;
        $this->result = $this->mySQLI->query($this->sql);
        $this->filasAfectadas = $this->mySQLI->affected_rows;
        $this->usuarioId = $this->mySQLI->insert_id;
    }
    
    public function obtenerResult() {
        return $this->result; 
    }
    
    public function obtenerFilasAfectadas() {
        return $this->filasAfectadas; 
    }
    
    public function obtenerUsuarioId() {
        return $this->usuarioId; 
    }
}
