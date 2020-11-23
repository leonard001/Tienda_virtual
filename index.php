<?php
    require_once 'Controlador/Controlador.php';
    require_once 'Modelo/BDUsuarios.php';
    require_once 'Modelo/Usuario.php';
    require_once 'Modelo/BDConexion.php';

    
    $controlador = new Controlador();
          
     $accion = isset($_GET['accion'])? $_GET['accion']:NULL;
     
     
    if($accion == "login"){
       $controlador->verPagina('Vista/html/login.php');
      }
    
    elseif($accion == "usuario"){
       $controlador->verPagina('Vista/html/regUsuarios.php');
      } 
      
   elseif($accion == "guardarusuario"){
        $pApe = $_POST["apel"];
        $pNom = $_POST["nom"];
        $Ema = $_POST["ema"];
        $direcc = $_POST["dir"];
        $ciud = $_POST["ciu"];
        $cel = $_POST["cel"];
        $tel = $_POST["tel"];
        $contr = 1234;
        $controlador->registrarUsuario($pApe, $pNom, $Ema, $direcc, $ciud, $cel, $tel, $contr);
      }
      
    else {
       $controlador->verPagina('Vista/html/tiendaVirtual.php');
      }
      