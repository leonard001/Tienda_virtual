<?php

class BDUsuarios {
    
  public function agregarUsuario(Usuario $usuario){
  $conexion = new BDConexion();
  $conexion ->Abrir();
  $priApellido = $usuario ->getpri_Apellido();
  $prNombre = $usuario -> getpri_Nombre();
  $email = $usuario -> getEmail();
  $direcc = $usuario -> getDireccion();
  $ciuda = $usuario -> getCiudad();
  $celu = $usuario -> getCelular();
  $tle = $usuario -> getTelefono();
  $contrase = $usuario ->getContraseña();
  $sql = "INSERT INTO usuarios VALUES(null,'$priApellido','$prNombre','$email','$direcc','$ciuda','$celu','$tle','$contrase')";
  $conexion -> consulta($sql);
  $usuarioId = $conexion->obtenerUsuarioId();
  $conexion->Cerrar();
  return $usuarioId;
}


}
