<?php
class Controlador {
   
    public function verPagina($ruta) {
        require_once $ruta;
    }
    
    public function registrarUsuario($pApe,$pNom, $Ema, $direcc, $ciud, $cel, $tel, $contr) {
        $usuario = new Usuario(null,$pApe, $pNom, $Ema, $direcc, $ciud, $cel, $tel, $contr);
        $BDUsuario = new BDUsuarios();
        $BDUsuario->agregarUsuario($usuario);
    }
}
